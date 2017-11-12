@extends('front.layout')
@section('content')
    @include('front.influence.meta')
    <!-- page -->
    <div class="page">
        <div class="container">
            <div class="page-title text--center">
                <h2 class="title-1">@lang('all_page.about_product')</h2>
            </div>
            <div class="nav-content text--center">
                <ul class="list--inline">
                    <li> <a href="/about">@lang('about.menu1')</a> </li>
                    <li> <a href="/composition">@lang('about.menu2')</a> </li>
                    <li> <a href="/utility">@lang('about.menu3')</a> </li>
                    <li class="active"> <a href="/influence">@lang('about.menu4')</a> </li>
                </ul>
            </div>
        </div>
        <div class="page-content">
            <div class="container">
                <div class="page-preview">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-7">
                            <h3>{!! $influence->{'block_title'.$lg} !!}</h3>
                            {!! $influence->{'block_text'.$lg} !!}
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-5">
                            <div class="img"> <img src="{{$influence->block_img->link_field}}?{{$influence->block_img->cache_index}}" class="img--fluid" /> </div>
                        </div>
                    </div>
                </div>
                <div class="row" data-sticky-parent>
                    <div class="col-lg-3 col-md-3 col-sm-3">
                        <!-- nav-category -->
                        <div class="nav-category hidden-xs" data-sticky>
                            <ul class="list--unstyled">
                                <li> <a href="#nervous">
                                        <i class="icon icon-nervous"></i> <span>@lang('index.sys1')</span>
                                    </a> </li>
                                <li> <a href="#circulatory">
                                        <i class="icon icon-circulatory"></i> <span>@lang('index.sys2')</span>
                                    </a> </li>
                                <li> <a href="#respiratory">
                                        <i class="icon icon-respiratory"></i> <span>@lang('index.sys3')</span>
                                    </a> </li>
                                <li> <a href="#digestive">
                                        <i class="icon icon-digestive"></i> <span>@lang('index.sys4')</span>
                                    </a> </li>
                                <li> <a href="#endocrine">
                                        <i class="icon icon-endocrine"></i> <span>@lang('index.sys5')</span>
                                    </a> </li>
                                <li> <a href="#cover">
                                        <i class="icon icon-cover"></i> <span>@lang('index.sys6')</span>
                                    </a> </li>
                            </ul>
                        </div>
                        <!-- /nav-category -->
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-9">
                        <!-- section-default -->
                        <section class="section section--default" id="nervous">
                            <div class="nav-category visible-xs">
                                <ul class="list--unstyled">
                                    <li> <a href="#" data-toggle="tab-mobile">
                                            <i class="icon icon-nervous"></i> <span>@lang('index.sys1')</span>
                                        </a> </li>
                                </ul>
                            </div>
                            <div class="section-content clearfix">
                                <div class="section-img pull-left"> <img src="{{$influence->img1->link_field}}?{{$influence->img1->cache_index}}" class="img--fluid" /> </div>
                                <h2 class="title-1">{!! $influence->{'item_title1'.$lg} !!}</h2>
                                {!! $influence->{'item_text1'.$lg} !!}
                            </div>
                        </section>
                        <!-- /section-default -->
                        <!-- section-default -->
                        <section class="section section--default" id="circulatory">
                            <div class="nav-category visible-xs">
                                <ul class="list--unstyled">
                                    <li> <a href="#" data-toggle="tab-mobile">
                                            <i class="icon icon-circulatory"></i> <span>@lang('index.sys2')</span>
                                        </a> </li>
                                </ul>
                            </div>
                            <div class="section-content clearfix">
                                <div class="section-img pull-left"> <img src="{{$influence->img2->link_field}}?{{$influence->img2->cache_index}}" class="img--fluid" /> </div>
                                <h2 class="title-1">{!! $influence->{'item_title2'.$lg} !!}</h2>
                                {!! $influence->{'item_text2'.$lg} !!}
                            </div>
                        </section>
                        <!-- /section-default -->
                        <!-- section-default -->
                        <section class="section section--default" id="respiratory">
                            <div class="nav-category visible-xs">
                                <ul class="list--unstyled">
                                    <li> <a href="#" data-toggle="tab-mobile">
                                            <i class="icon icon-respiratory"></i> <span>@lang('index.sys3')</span>
                                        </a> </li>
                                </ul>
                            </div>
                            <div class="section-content clearfix">
                                <div class="section-img pull-left"> <img src="{{$influence->img3->link_field}}?{{$influence->img3->cache_index}}" class="img--fluid" /> </div>
                                <h2 class="title-1">{!! $influence->{'item_title3'.$lg} !!}</h2>
                                {!! $influence->{'item_text3'.$lg} !!}
                            </div>
                        </section>
                        <!-- /section-default -->
                        <!-- section-default -->
                        <section class="section section--default" id="digestive">
                            <div class="nav-category visible-xs">
                                <ul class="list--unstyled">
                                    <li> <a href="#" data-toggle="tab-mobile">
                                            <i class="icon icon-digestive"></i> <span>@lang('index.sys4')</span>
                                        </a> </li>
                                </ul>
                            </div>
                            <div class="section-content clearfix">
                                <div class="section-img pull-left"> <img src="{{$influence->img4->link_field}}?{{$influence->img4->cache_index}}" class="img--fluid" /> </div>
                                <h2 class="title-1">{!! $influence->{'item_title4'.$lg} !!}</h2>
                                {!! $influence->{'item_text4'.$lg} !!}
                            </div>
                        </section>
                        <!-- /section-default -->
                        <!-- section-default -->
                        <section class="section section--default" id="endocrine">
                            <div class="nav-category visible-xs">
                                <ul class="list--unstyled">
                                    <li> <a href="#" data-toggle="tab-mobile">
                                            <i class="icon icon-endocrine"></i> <span>@lang('index.sys5')</span>
                                        </a> </li>
                                </ul>
                            </div>
                            <div class="section-content clearfix">
                                <div class="section-img pull-left"> <img src="{{$influence->img5->link_field}}?{{$influence->img5->cache_index}}" class="img--fluid" /> </div>
                                <h2 class="title-1">{!! $influence->{'item_title5'.$lg} !!}</h2>
                                {!! $influence->{'item_text5'.$lg} !!}
                            </div>
                        </section>
                        <!-- /section-default -->
                        <!-- section-default -->
                        <section class="section section--default" id="cover">
                            <div class="nav-category visible-xs">
                                <ul class="list--unstyled">
                                    <li> <a href="#" data-toggle="tab-mobile">
                                            <i class="icon icon-cover"></i> <span>@lang('index.sys6')</span>
                                        </a> </li>
                                </ul>
                            </div>
                            <div class="section-content clearfix">
                                <div class="section-img pull-left"> <img src="{{$influence->img6->link_field}}?{{$influence->img6->cache_index}}" class="img--fluid" /> </div>
                                <h2 class="title-1">{!! $influence->{'item_title6'.$lg} !!}</h2>
                                {!! $influence->{'item_text6'.$lg} !!}
                            </div>
                        </section>
                        <!-- /section-default -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /page -->
@endsection
