<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Dosarkz\EPayKazCom\KkbSign;
use Dosarkz\EPayKazCom\Xml;
use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use Illuminate\Support\Facades\Log;
use Interpro\Core\Contracts\Taxonomy\Taxonomy;
use Interpro\Entrance\Contracts\Extract\ExtractAgent;
use Interpro\Extractor\Contracts\Selection\Tuner;
use Interpro\Feedback\Contracts\FeedbackAgent;
use Illuminate\Support\Facades\App;
use Dosarkz\EPayKazCom\Facades\Epay;
use Interpro\Entrance\Contracts\CommandAgent\InitAgent;
use Interpro\Entrance\Agents\UpdateAgent;


class MailController extends Controller
{
    private $init;
    private $update;
    private $feedback;
    private $extract;
    public function __construct( FeedbackAgent $feedback, ExtractAgent $ext, InitAgent $int, UpdateAgent $upd){

        $this->init    = $int;
        $this->update = $upd;
        $this->extract = $ext;
        $this->feedback = $feedback;
        // Объявляем все шаблоны писем для форм

        $this->feedback->setBodyTemplate('order', 'back/mail/order_mail');
        $this->feedback->setBodyTemplate('client_notice', 'back/mail/client_notice_mail');
        $this->feedback->setBodyTemplate('client_static_notice', 'back/mail/client_static_notice_mail');
    }

    /*public function clientStaticNotice()
    {
        try{
            $form = 'client_static_notice';
            $this->feedback->mail($form, [], $email);
            return redirect('thanks');
        }catch(\Exception $error){
            return ['error' => true, 'text'=> $error->getMessage()];
        }
    }*/

    public function kkb_notice( Request $request )
    {
        $xml = $request['response'];

        $xml_parser = new Xml();
        $result = $xml_parser->parse($xml);
        if (in_array("ERROR",$result)){
            return false;
        };
        /*if (in_array("DOCUMENT",$result)){
            $kkb = new KkbSign();
            $kkb->invert();
            $fieldsFromBank = Epay::split_sign($xml,"BANK");
            Log::info($fieldsFromBank);
            $check = $kkb->check_sign64($fieldsFromBank['LETTER'], $fieldsFromBank['RAWSIGN'], Epay::public_key_path);
            if ($check != 1)
                return false;
        } else { return false; };

        if ( !($result['PAYMENT_MERCHANT_ID'] == Epay::merchant_id) ) return false;*/
        $data = [];
        $this->extract->tuneSelection('kkb_orders_list')->eq('order_id', $result['ORDER_ORDER_ID']);
        $orders = $this->extract->getBlock('kkb_orders');
        $order = $orders->kkb_orders_list_group->first()->client_name_field;

        $data['order_id'] = $order->order_id_field;
        $data['client_name'] = $order->client_name_field;
        $data['email'] = $order->email_field;
        $data['phone'] = $order->phone_field;
        $data['city'] = $order->city_field;
        $data['address'] = $order->address_field;
        $data['goods'] = $order->goods_field;

        $this->feedback->mail('order', $data);
        $this->feedback->mail('client_static_notice', [], $data['email']);
    }

    public function kkb_register(){
        try{
            if ( !empty($_COOKIE['client']) && !empty($_COOKIE['goods']) ) {

                $client = json_decode($_COOKIE['client'], true);
                $goods = json_decode($_COOKIE['goods']);

                setcookie('goods', null, -1, '/');
                setcookie('client', null, -1, '/');

                array_pull($client, 'form');
                array_pull($client, 'payment');

                $sum = 0;
                $order_goods = '<p>';
                $kkb_appendix = '';
                $i = 1;
                foreach ($goods as $key=>$value) {
                    $item = $this->extract->getGroupItem('goods_item', $key);
                    $order_goods .= $item->item_title_ru_field . ' (' . $item->price_field . '<small> ₸</small>) : ' . $value . ' шт. <br>';
                    $kkb_sum = $item->price_field * $value;
                    $kkb_appendix .= '<item number="' . $i . '" name="' . $item->item_title_ru_field . '" quantity="' . $value . '" amount="' . $kkb_sum . '"/>';
                    $sum += $kkb_sum;
                    $i++;
                }
                $order_goods .= '</p><p>Сумма заказа: ' . strval($sum) . '<small> ₸</small></p><p style="font-weight: bold">Оплачено через KKB Epay</p>';

                $new_order = $this->init->init('kkb_orders_list', [ 'superior' => 0 ]);
                $order_id = $new_order->id_field;
                $order_id = date("Ymd") . $order_id;
                $this->update->update('kkb_orders_list', ($new_order->id_field), [ 'order_id' => $order_id, 'goods_info' => $order_goods, 'client_name' => $client['client_name'], 'email' => $client['email'], 'phone' => $client['phone'], 'city' => $client['city'], 'address' => $client['address'] ]);

                $lg = App::getLocale();
                if ($lg == 'ru') $lg = 'rus';
                if ($lg == 'en') $lg = 'eng';
                if ($lg == 'kk') $lg = 'kaz';

                $pay =  Epay::basicAuth([
                    'order_id' => $order_id,
                    'currency' => '398',
                    'amount' => $sum,
                    'email' => $client['email'],
                    'Language' => $lg,
                    'appendix' => $kkb_appendix,
                    'hashed' => true,
                ]);
                $data = $pay->generateFields();

                return redirect('go-to-pay')->with('data', $data);

            } else return ['error' => true, 'text'=> 'Necessary cookies undefined'];
        }catch(\Exception $error){
            return ['error' => true, 'text'=> $error->getMessage()];
        }
    }



//////////////////////////////////////////////////////////////////////////////////////
    public function clientNotice($client, $goods){
        try{
            $lg = '_' . App::getLocale() . '_field';
            $form = 'client_notice';
            $email = $client['email'];
            $address = $client['city'] . ', ' . $client['address'];
            $fields = [];
            $sum = 0;
            $order = '<p>';

            foreach ($goods as $key=>$value) {
                $item = $this->extract->getGroupItem('goods_item', $key);
                $order .= $item->{'item_title'.$lg} . ' (' . $item->price_field . '<small> ₸</small>) : ' . $value . '<br>';
                $sum += $item->price_field * $value;
            }
            $order .= '</p>';

            $fields['order_list'] = $order;
            $fields['order_sum'] = strval($sum);
            $fields['address'] = $address;

            $this->feedback->mail($form, $fields, $email);
            return ['error' => false];
        }catch(\Exception $error){
            return ['error' => true, 'text'=> $error->getMessage()];
        }
    }

    public function send(){
        try{
            if ( !empty($_COOKIE['client']) && !empty($_COOKIE['goods']) ) {
                $cookie = $_COOKIE['client'];
                $client = json_decode($cookie, true);
                $form = array_pull($client, 'form');
                array_pull($client, 'payment');
                $data = $client;

                $sum = 0;
                $order = '<p>';

                $cookie = $_COOKIE['goods'];
                $goods = json_decode($cookie);
                foreach ($goods as $key=>$value) {
                    $item = $this->extract->getGroupItem('goods_item', $key);
                    $order .= $item->item_title_ru_field . ' (' . $item->price_field . '<small> ₸</small>) : ' . $value . ' шт. <br>';
                    $sum += $item->price_field * $value;
                }
                $order .= '</p><p>Сумма заказа: ' . strval($sum) . '<small> ₸</small></p><p style="font-weight: bold">Оплата наличными</p>';

                $data['goods'] = $order;

                $this->feedback->mail($form, $data);

                $this->clientNotice($client, $goods);

                setcookie('goods', null, -1, '/');
                setcookie('client', null, -1, '/');
            } else return ['error' => true, 'text'=> 'Necessary cookies undefined'];
            return ['error' => false];
        }catch(\Exception $error){
            return ['error' => true, 'text'=> $error->getMessage()];
        }
    }

    public function Captcha( Request $request )
    {
        $data = $request->all();
        $secret = '6LeIxAcTAAAAAGG-vFI1TnRWxMZNFuojJ4WifJWe';
        $recaptcha = new ReCaptcha($secret);
        $resp = $recaptcha->verify($data['g-recaptcha-response'], $_SERVER['REMOTE_ADDR']);
        if ($resp->isSuccess()) {
            $data['error'] = false;
        } else {
            $data['error'] = true;
        }
        return json_encode($data);
    }

}
