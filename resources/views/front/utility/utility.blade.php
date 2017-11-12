@extends('front.layout')
@section('content')
    @include('front.utility.meta')
    <!-- page -->
    <div class="page">
        <div class="container">
            <div class="page-title text--center">
                <h1 class="title-1">@lang('all_page.about_product')</h1>
            </div>
            <div class="nav-content text--center">
                <ul class="list--inline">
                    <li> <a href="/about">@lang('about.menu1')</a> </li>
                    <li> <a href="/composition">@lang('about.menu2')</a> </li>
                    <li class="active"> <a href="/utility">@lang('about.menu3')</a> </li>
                    <li> <a href="/influence">@lang('about.menu4')</a> </li>
                </ul>
            </div>
        </div>
        <div class="page-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <h3>{!! $utility->{'block_title'.$lg} !!}</h3>
                        {!! $utility->{'block_text'.$lg} !!}
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <!-- preamble-items-list -->
                        <div class="preamble-items-list">
                            <div class="row block-in">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <!-- preamble-item -->
                                    <div class="preamble-item">
                                        <div class="item-icon">
                                            <div class="img--centered"> <img src="/img/icon-quality.png" srcset="/img/icon-quality.png 1x, /img/icon-quality@2x.png 2x" class="img--fluid" /> </div>
                                        </div>
                                        <h4>{!! $utility->{'fact_title1'.$lg} !!}</h4>
                                        <div class="item-text">{!! $utility->{'fact_text1'.$lg} !!}</div>
                                    </div>
                                    <!-- /preamble-item -->
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <!-- preamble-item -->
                                    <div class="preamble-item">
                                        <div class="item-icon">
                                            <div class="img--centered"> <img src="/img/icon-availability.png" srcset="/img/icon-availability.png 1x, /img/icon-availability@2x.png 2x" class="img--fluid" /> </div>
                                        </div>
                                        <h4>{!! $utility->{'fact_title2'.$lg} !!}</h4>
                                        <div class="item-text">{!! $utility->{'fact_text2'.$lg} !!}</div>
                                    </div>
                                    <!-- /preamble-item -->
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <!-- preamble-item -->
                                    <div class="preamble-item">
                                        <div class="item-icon">
                                            <div class="img--centered"> <img src="/img/icon-expiry.png" srcset="/img/icon-expiry.png 1x, /img/icon-expiry@2x.png 2x" class="img--fluid" /> </div>
                                        </div>
                                        <h4>{!! $utility->{'fact_title3'.$lg} !!}</h4>
                                        <div class="item-text">{!! $utility->{'fact_text3'.$lg} !!}</div>
                                    </div>
                                    <!-- /preamble-item -->
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <!-- preamble-item -->
                                    <div class="preamble-item">
                                        <div class="item-icon">
                                            <div class="img--centered"> <img src="/img/icon-economy.png" srcset="/img/icon-economy.png 1x, /img/icon-economy@2x.png 2x" class="img--fluid" /> </div>
                                        </div>
                                        <h4>{!! $utility->{'fact_title4'.$lg} !!}</h4>
                                        <div class="item-text">{!! $utility->{'fact_text4'.$lg} !!}</div>
                                    </div>
                                    <!-- /preamble-item -->
                                </div>
                            </div>
                        </div>
                        <!-- /preamble-items-list -->
                    </div>
                </div>
                <!-- category-items-list -->
                <div class="category-items-list">
                    <div class="block-in">
                        <!-- category-item -->
                        <div class="category-item" id="children">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-5">
                                    <div class="item-img">
                                        <div class="img--centered" data-img-loader> <img src="{{$utility->img1->link_field}}?{{$utility->img1->cache_index}}" class="img--fluid" /> </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-7">
                                    <h3>{!! $utility->{'item_title1'.$lg} !!}</h3>
                                    <div class="item-text">
                                        {!! $utility->{'item_text1'.$lg} !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /category-item -->
                        <!-- category-item -->
                        <div class="category-item" id="sport">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-5">
                                    <div class="item-img">
                                        <div class="img--centered" data-img-loader> <img src="{{$utility->img2->link_field}}?{{$utility->img2->cache_index}}" class="img--fluid" /> </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-7">
                                    <h3>{!! $utility->{'item_title2'.$lg} !!}</h3>
                                    <div class="item-text">
                                        {!! $utility->{'item_text2'.$lg} !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /category-item -->
                        <!-- category-item -->
                        <div class="category-item" id="pregnant">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-5">
                                    <div class="item-img">
                                        <div class="img--centered" data-img-loader> <img src="{{$utility->img3->link_field}}?{{$utility->img3->cache_index}}" class="img--fluid" /> </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-7">
                                    <h3>{!! $utility->{'item_title3'.$lg} !!}</h3>
                                    <div class="item-text">
                                        {!! $utility->{'item_text3'.$lg} !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /category-item -->
                        <!-- category-item -->
                        <div class="category-item" id="age">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-5">
                                    <div class="item-img">
                                        <div class="img--centered" data-img-loader> <img src="{{$utility->img4->link_field}}?{{$utility->img4->cache_index}}" class="img--fluid" /> </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-7">
                                    <h3>{!! $utility->{'item_title4'.$lg} !!}</h3>
                                    <div class="item-text">
                                        {!! $utility->{'item_text4'.$lg} !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /category-item -->
                    </div>
                </div>
                <!-- /category-items-list -->
            </div>
        </div>
    </div>
    <!-- /page -->
@endsection
