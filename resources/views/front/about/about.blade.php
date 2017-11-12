@extends('front.layout')
@section('content')
    @include('front.about.meta')
    <!-- page -->
    <div class="page">
        <div class="container">
            <div class="page-title text--center">
                <h1 class="title-1">@lang('all_page.about_product')</h1>
            </div>
            <div class="nav-content text--center">
                <ul class="list--inline">
                    <li class="active"> <a href="/about">@lang('about.menu1')</a> </li>
                    <li> <a href="/composition">@lang('about.menu2')</a> </li>
                    <li> <a href="/utility">@lang('about.menu3')</a> </li>
                    <li> <a href="/influence">@lang('about.menu4')</a> </li>
                </ul>
            </div>
        </div>
        <div class="page-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <h3>{!! $about->{'item_title1'.$lg} !!}</h3>
                        {!! $about->{'item_text1'.$lg} !!}
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="img"> <img src="/img/pic-06.png" class="img--fluid" /> </div>
                    </div>
                </div>
            </div>
            <!-- section-howto -->
            <section class="sectio section--howto">
                <div class="container">
                    <div class="section-content">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <h3 class="title-1">{!! $about->{'item_title2'.$lg} !!}</h3>
                                {!! $about->{'item_text2'.$lg} !!}
                                <!-- items-list -->
                                <div class="items-list">
                                    <div class="row block-in">
                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                            <!-- item -->
                                            <div class="item">
                                                <div class="item-img">
                                                    <div class="img--centered"> <img src="/img/pic-how-01.png" class="img--fluid" /> </div>
                                                </div>
                                                <div class="item-text text--center">@lang('about.recipe1')</div>
                                            </div>
                                            <!-- /item -->
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                            <!-- item -->
                                            <div class="item">
                                                <div class="item-img">
                                                    <div class="img--centered"> <img src="/img/pic-how-02.png" class="img--fluid" /> </div>
                                                </div>
                                                <div class="item-text text--center">@lang('about.recipe2')</div>
                                            </div>
                                            <!-- /item -->
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                            <!-- item -->
                                            <div class="item">
                                                <div class="item-img">
                                                    <div class="img--centered"> <img src="/img/pic-how-03.png" class="img--fluid" /> </div>
                                                </div>
                                                <div class="item-text text--center">@lang('about.recipe3')</div>
                                            </div>
                                            <!-- /item -->
                                        </div>
                                    </div>
                                </div>
                                <!-- /items-list -->
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- /section-howto -->
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="img"> <img src="/img/pic-07.png" class="img--fluid" /> </div>
                    </div>
                    <div class="col-lg-6 col-md-6"> <br /><br />
                        <h3>{!! $about->{'item_title3'.$lg} !!}</h3>
                        {!! $about->{'item_text3'.$lg} !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /page -->
@endsection
