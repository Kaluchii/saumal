<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
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


class MailController extends Controller
{
    private $feedback;
    private $extract;
    public function __construct( FeedbackAgent $feedback, ExtractAgent $ext){

        $this->extract = $ext;
        $this->feedback = $feedback;
        // Объявляем все шаблоны писем для форм

        $this->feedback->setBodyTemplate('order', 'back/mail/order_mail');
        $this->feedback->setBodyTemplate('client_notice', 'back/mail/client_notice_mail');
        $this->feedback->setBodyTemplate('client_static_notice', 'back/mail/client_static_notice_mail');
    }


    public function test()
    {
    }


    /*public function clientStaticNotice($email)
    {
        try{
            $form = 'client_static_notice';

            $this->feedback->mail($form, [], $email);
            return ['error' => false];
        }catch(\Exception $error){
            return ['error' => true, 'text'=> $error->getMessage()];
        }
    }*/

    /*public function kkb_notice( Request $request )
    {
        $order .= '</p><p>Сумма заказа: ' . strval($sum) . '<small> ₸</small></p><p style="font-weight: bold">Оплачено через KKB Epay</p>';

        $data['goods'] = $order;
        $cookie = $_COOKIE['goods'];
        $goods = json_decode($cookie);

        $this->feedback->mail($form, $data);
        foreach ($goods as $key=>$value) {
            $item = $this->extract->getGroupItem('goods_item', $key);
            $order .= $item->item_title_ru_field . ' (' . $item->price_field . '<small> ₸</small>) : ' . $value . ' шт. <br>';
            $sum += $item->price_field * $value;
        }
        $email = $client['email'];
        $this->clientStaticNotice($email);
        return redirect('thanks');
    }*/

    public function kkb_register(){
        try{
            if ( true/*!empty($_COOKIE['client']) && !empty($_COOKIE['goods'])*/ ) {

                $client = json_decode($_COOKIE['client'], true);
                $goods = json_decode($_COOKIE['goods']);

                array_pull($client, 'form');
                array_pull($client, 'payment');
                $data = $client;

                $sum = 0;
                $order = '<p>';
                foreach ($goods as $key=>$value) {
                    $item = $this->extract->getGroupItem('goods_item', $key);
                    $order .= $item->item_title_ru_field . ' (' . $item->price_field . '<small> ₸</small>) : ' . $value . ' шт. <br>';
                    $sum += $item->price_field * $value;
                }
                $email = $client['email'];
                $order = date("YmdHis");
                $pay =  Epay::basicAuth([
                    'order_id' => $order,
                    'currency' => '398',
                    'amount' => 19999,
                    'email' => $email,
                    'hashed' => true,
                ]);

                $pay->generateUrl();
                dd($pay);

//                setcookie('goods', null, -1, '/');
//                setcookie('client', null, -1, '/');
            } else return ['error' => true, 'text'=> 'Necessary cookies undefined'];
            return ['error' => false];
        }catch(\Exception $error){
            return ['error' => true, 'text'=> $error->getMessage()];
        }
    }

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
                if ( $client['payment'] == 'cash' ) {
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
                } else {
                    // Отправка на kkb epay или что то там
                }
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
