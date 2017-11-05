<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Interpro\Entrance\Contracts\Extract\ExtractAgent;

class AdminController extends Controller
{
    private $extract;
    public function __construct(ExtractAgent $ext){
        $this->extract = $ext;
        $this->extract->tuneSelection('phones')->sortBy('sorter','DESC');
        $this->extract->tuneSelection('slide')->sortBy('sorter','DESC');
        $this->extract->tuneSelection('home_stages')->sortBy('sorter','DESC');
        $this->extract->tuneSelection('part1')->sortBy('sorter','DESC');
        $this->extract->tuneSelection('part2')->sortBy('sorter','DESC');
        $this->extract->tuneSelection('part3')->sortBy('sorter','DESC');
        $this->extract->tuneSelection('news_item')->sortBy('sorter','DESC');
        $this->extract->tuneSelection('cities')->sortBy('sorter','DESC');
        $this->extract->tuneSelection('sellers')->sortBy('sorter','DESC');
        $this->extract->tuneSelection('distributors')->sortBy('sorter','DESC');
    }

    public function getIndex(){
        return view('back.layout');
    }

    public function getAll(){
        $block = $this->extract->getBlock('all_site');
        $scripts = $this->extract->getBlock('scripts');
        return view('back.blocks.all_site', [
            'all_site' => $block,
            'scripts' => $scripts
        ]);
    }

    public function getHomeSlider(){
        $block = $this->extract->getBlock('slider');
        return view('back.blocks.slider', [
            'slider' => $block
        ]);
    }

    public function getHomeUtility(){
        $block = $this->extract->getBlock('home_utility');
        return view('back.blocks.home_utility', [
            'home_utility' => $block
        ]);
    }

    public function getHomeInfluence(){
        $block = $this->extract->getBlock('home_influence');
        return view('back.blocks.home_influence', [
            'home_influence' => $block
        ]);
    }

    public function getHomeProcess(){
        $block = $this->extract->getBlock('home_process');
        return view('back.blocks.home_process', [
            'home_process' => $block
        ]);
    }

    public function getAbout(){
        $block = $this->extract->getBlock('about');
        return view('back.blocks.about', [
            'about' => $block
        ]);
    }

    public function getComposition(){
        $block = $this->extract->getBlock('composition');
        return view('back.blocks.composition', [
            'composition' => $block
        ]);
    }

    public function getUtility(){
        $block = $this->extract->getBlock('utility');
        return view('back.blocks.utility', [
            'utility' => $block
        ]);
    }

    public function getInfluence(){
        $block = $this->extract->getBlock('influence');
        return view('back.blocks.influence', [
            'influence' => $block
        ]);
    }

    public function getMission(){
        $block = $this->extract->getBlock('mission');
        return view('back.blocks.mission', [
            'mission' => $block
        ]);
    }

    public function getFactory(){
        $block = $this->extract->getBlock('factory');
        return view('back.blocks.factory', [
            'factory' => $block
        ]);
    }

    public function getProcess(){
        $block = $this->extract->getBlock('process');
        return view('back.blocks.process', [
            'process' => $block
        ]);
    }

    public function getNews(){
        $block = $this->extract->getBlock('news');
        return view('back.blocks.news', [
            'news' => $block
        ]);
    }

    public function getNewsItem( $id ){
        $group_item = $this->extract->getGroupItem('news_item', $id);
        return view('back.groups.news_item.news_item', [
            'item' => $group_item
        ]);
    }

    public function getContacts(){
        $block = $this->extract->getBlock('contacts');
        return view('back.blocks.contacts', [
            'contacts' => $block
        ]);
    }

    public function getCity( $id ){
        $group_item = $this->extract->getGroupItem('cities', $id);
        return view('back.groups.cities.cities', [
            'item' => $group_item
        ]);
    }

    public function getCatalog(){
        $block = $this->extract->getBlock('example');
        return view('back.blocks.example', [
            'block' => $block
        ]);
    }

    public function getOrder(){
        $block = $this->extract->getBlock('example');
        return view('back.blocks.example', [
            'block' => $block
        ]);
    }
}
