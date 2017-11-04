<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use Illuminate\Support\Facades\Log;
use Interpro\Entrance\Contracts\Extract\ExtractAgent;


class FrontController extends Controller
{
    private $extract;
    public function __construct(ExtractAgent $ext){
        $this->extract = $ext;
        $scripts = $this->extract->getBlock('scripts');
        view()->share([
            'scripts' => $scripts,
        ]);
    }


    public function getIndex(){
        return view('front.index.index', [
        ]);
    }

    public function getAbout(){
        return view('front.about.about', [
        ]);
    }

    public function getComposition(){
        return view('front.composition.composition', [
        ]);
    }

    public function getUtility(){
        return view('front.utility.utility', [
        ]);
    }

    public function getInfluence(){
        return view('front.influence.influence', [
        ]);
    }

    public function getMission(){
        return view('front.mission.mission', [
        ]);
    }

    public function getFactory(){
        return view('front.factory.factory', [
        ]);
    }

    public function getProcess(){
        return view('front.process.process', [
        ]);
    }

    public function getNews(){
        return view('front.news.news', [
        ]);
    }

    public function getNewsItem( $slug ){
        return view('front.news.news', [
        ]);
    }

    public function getContacts(){
        return view('front.contacts.contacts', [
        ]);
    }

    public function getCatalog(){
        return view('front.catalog.catalog', [
        ]);
    }

    public function getOrder(){
        return view('front.order.order', [
        ]);
    }
}