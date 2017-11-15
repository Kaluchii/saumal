<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Log;
use Interpro\Entrance\Contracts\Extract\ExtractAgent;


class FrontController extends Controller
{
    private $extract;
    public function __construct(ExtractAgent $ext){
        $this->extract = $ext;
        $this->extract->tuneSelection('phones')->sortBy('sorter','ASC');
        $scripts = $this->extract->getBlock('scripts');
        $all_site = $this->extract->getBlock('all_site');
        $lg = '_' . App::getLocale() . '_field';
        view()->share([
            'scripts' => $scripts,
            'all_site' => $all_site,
            'lg' => $lg
        ]);
    }


    public function getIndex(){
        $this->extract->tuneSelection('home_stages')->sortBy('sorter','ASC');
        $this->extract->tuneSelection('slide')->sortBy('sorter','ASC');

        $slider = $this->extract->getBlock('slider');
        $home_utility = $this->extract->getBlock('home_utility');
        $home_influence = $this->extract->getBlock('home_influence');
        $home_process = $this->extract->getBlock('home_process');
        $news = $this->extract->getBlock('news');
        return view('front.index.index', [
            'slider' => $slider,
            'home_utility' => $home_utility,
            'home_influence' => $home_influence,
            'home_process' => $home_process,
            'news' => $news,
        ]);
    }

    public function getAbout(){
        $about = $this->extract->getBlock('about');
        return view('front.about.about', [
            'about' => $about,
        ]);
    }

    public function getComposition(){
        $composition = $this->extract->getBlock('composition');
        return view('front.composition.composition', [
            'composition' => $composition,
        ]);
    }

    public function getUtility(){
        $utility = $this->extract->getBlock('utility');
        return view('front.utility.utility', [
            'utility' => $utility,
        ]);
    }

    public function getInfluence(){
        $influence = $this->extract->getBlock('influence');
        return view('front.influence.influence', [
            'influence' => $influence,
        ]);
    }

    public function getMission(){
        $mission = $this->extract->getBlock('mission');
        return view('front.mission.mission', [
            'mission' => $mission,
        ]);
    }

    public function getFactory(){
        $factory = $this->extract->getBlock('factory');
        return view('front.factory.factory', [
            'factory' => $factory,
        ]);
    }

    public function getProcess(){
        $this->extract->tuneSelection('part1')->sortBy('sorter','ASC');
        $this->extract->tuneSelection('part2')->sortBy('sorter','ASC');
        $this->extract->tuneSelection('part3')->sortBy('sorter','ASC');
        $process = $this->extract->getBlock('process');
        return view('front.process.process', [
            'process' => $process,
        ]);
    }

    public function getNews(){
        $this->extract->tuneSelection('news_item')->take(1)->sortBy('sorter','DESC');
        $news = $this->extract->getBlock('news');
        $slug = $news->news_item_group->first()->slug_field;
        return redirect('news/' . $slug);
    }

    public function getNewsItem( $slug ){
        $this->extract->tuneSelection('news_item')->sortBy('sorter','DESC');
        $news_list = $this->extract->getBlock('news');
        $news = $this->extract->getBySlug('news_item', $slug);

        if ( is_null($news) ) abort(404);

        return view('front.news.news', [
            'news_list' => $news_list,
            'news'      => $news,
        ]);
    }

    public function getContacts(){
        $this->extract->tuneSelection('cities')->sortBy('sorter','ASC');
        $this->extract->tuneSelection('sellers')->sortBy('sorter','ASC');
        $this->extract->tuneSelection('distributors')->sortBy('sorter','ASC');
        $contacts = $this->extract->getBlock('contacts');
        return view('front.contacts.contacts', [
            'contacts' => $contacts,
        ]);
    }

    public function getCatalog(){
        $this->extract->tuneSelection('goods_item')->sortBy('sorter','ASC');
        $goods = $this->extract->getBlock('goods');
        return view('front.catalog.catalog', [
            'goods' => $goods,
        ]);
    }

    public function getOrder(){
        $orders = [];
        $meta = $this->extract->getBlock('orders');

        if ( !empty($_COOKIE['goods']) ) {
            $cookie = $_COOKIE['goods'];
            $goods = json_decode($cookie);
            foreach ($goods as $key=>$value) {
                $orders[] = [$this->extract->getGroupItem('goods_item', $key), 'count' => $value];
            }
        }
        return view('front.order.order', [
            'orders' => $orders,
            'meta' => $meta,
        ]);
    }
}