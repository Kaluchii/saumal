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

    public function clientStaticNotice(){
        try{
            if ( !empty($_COOKIE['client']) ) {
                $cookie = $_COOKIE['client'];
                $client = json_decode($cookie);
            } else return false;

            $form = 'client_static_notice';
            $email = $client['email'];

            $this->feedback->mail($form, [], $email);
            return ['error' => false];
        }catch(\Exception $error){
            return ['error' => true, 'error'=> $error->getMessage()];
        }
    }

    public function clientNotice($data){
        try{
            $lg = '_' . App::getLocale() . '_field';
            $form = 'client_notice';
            $email = $data['email'];
            $address = $data['city'] . ', ' . $data['address'];
            $fields = [];
            $sum = 0;
            $order = '';

            if ( !empty($_COOKIE['goods']) ) {
                $cookie = $_COOKIE['goods'];
                $goods = json_decode($cookie);
                foreach ($goods as $key=>$value) {
                    $item = $this->extract->getGroupItem('goods_item', $key);
                    $order .= '<p>' . $item->{'item_title'.$lg} . ' (' . $item->price_field . '₸) : ' . $value . '</p>';
                    $sum += $item->price_field * $value;
                }
            }

            $fields[] = ['order_list', $order];
            $fields[] = ['order_sum', strval($sum)];
            $fields[] = ['address', $address];

            $this->feedback->mail($form, $fields, $email);
            return ['error' => false];
        }catch(\Exception $error){
            return ['error' => true, 'error'=> $error->getMessage()];
        }
    }

    public function send(Request $request){
        try{
            $data = $request->all();

            $form = array_pull($data, 'form');

            $this->feedback->mail($form, $data);

            $this->clientNotice($data);

            return ['error' => false];
        }catch(\Exception $error){
            return ['error' => true, 'error'=> $error->getMessage()];
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
