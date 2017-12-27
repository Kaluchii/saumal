@extends('front.layout')
@section('content')
    @include('front.process.meta')
    <!-- page -->
    <div class="page">
        <div class="page-promo">
            <div class="container">
                <div class="page-title text--center">
                    <h2 class="title-1">@lang('all_page.about_company')</h2>
                </div>
                <div class="nav-content text--center">
                    <ul class="list--inline">
                        <li> <a href="/mission">@lang('about_comp.mission')</a> </li>
                        <li> <a href="/factory">@lang('about_comp.factory')</a> </li>
                        <li class="active"> <a href="/process">@lang('about_comp.process')</a> </li>
                        {{--<li> <a href="/news">@lang('about_comp.news')</a> </li>--}}
                    </ul>
                </div>
                <div class="page-promo-text">
                    <div class="row">
                        <div class="col-lg-5 col-md-5 col-sm-6">
                            <h3>{!! $process->{'top_title'.$lg} !!}</h3>
                            {!! $process->{'top_text'.$lg} !!}
                        </div>
                    </div>
                </div>
            </div>
            <div class="page-promo-cover bg--cover" style="background-image: url(/img/page-promo-01.png);"></div>
        </div>
        <div class="page-content">
            <div class="container">
                <!-- step-items-list -->
                <div class="step-items-list">
                    <div class="block-in">
                        <!-- step-item -->
                        <div class="step-item">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-5">
                                    <h3 class="visible-xs"><span>1</span> {!! $process->{'item_title1'.$lg} !!}</h3>
                                    <div class="item-viewport">
                                        <div class="item-slider">
                                            <div class="carousel owl-carousel">
                                                <?php $i = 0 ?>
                                                @foreach($process->part1_group as $item)
                                                    <?php $i++ ?>
                                                    <div class="slide">
                                                        <div class="slide-img">
                                                            <div class="img--centered"> <img data-src="{{$item->img->link_field}}?{{$item->img->cache_index}}" class="img--fluid owl-lazy" /> </div>
                                                        </div>
                                                        <div class="hidden" data-source="desc">
                                                            <div class="slide-in text--center">
                                                                <div class="slide-index">1.{{$i}}</div>
                                                                <div class="slide-title text--uppercase">{!! $item->{'item_title'.$lg} !!}</div>
                                                                <div class="slide-text">{!! $item->{'item_text'.$lg} !!}</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                        <div class="item-desc">
                                            <div class="carousel owl-carousel"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-7">
                                    <div class="item-in">
                                        <h3 class="hidden-xs"><span>1</span> {!! $process->{'item_title1'.$lg} !!}</h3>
                                        <div class="item-text">
                                            {!! $process->{'item_text1'.$lg} !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /step-item -->
                        <!-- step-item -->
                        <div class="step-item">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-5">
                                    <h3 class="visible-xs"><span>2</span> {!! $process->{'item_title2'.$lg} !!}</h3>
                                    <div class="item-viewport">
                                        <div class="item-slider">
                                            <div class="carousel owl-carousel">
                                                <?php $i = 0 ?>
                                                @foreach($process->part2_group as $item)
                                                    <?php $i++ ?>
                                                    <div class="slide">
                                                        <div class="slide-img">
                                                            <div class="img--centered"> <img data-src="{{$item->img->link_field}}?{{$item->img->cache_index}}" class="img--fluid owl-lazy" /> </div>
                                                        </div>
                                                        <div class="hidden" data-source="desc">
                                                            <div class="slide-in text--center">
                                                                <div class="slide-index">2.{{$i}}</div>
                                                                <div class="slide-title text--uppercase">{!! $item->{'item_title'.$lg} !!}</div>
                                                                <div class="slide-text">{!! $item->{'item_text'.$lg} !!}</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                        <div class="item-desc">
                                            <div class="carousel owl-carousel"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-7">
                                    <div class="item-in">
                                        <h3 class="hidden-xs"><span>2</span> {!! $process->{'item_title2'.$lg} !!}</h3>
                                        <div class="item-text">
                                            {!! $process->{'item_text2'.$lg} !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /step-item -->
                        <!-- step-item -->
                        <div class="step-item">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-5">
                                    <h3 class="visible-xs"><span>3</span> {!! $process->{'item_title3'.$lg} !!}</h3>
                                    <div class="item-viewport">
                                        <div class="item-slider">
                                            <div class="carousel owl-carousel">
                                                <?php $i = 0 ?>
                                                @foreach($process->part3_group as $item)
                                                    <?php $i++ ?>
                                                    <div class="slide">
                                                        <div class="slide-img">
                                                            <div class="img--centered"> <img data-src="{{$item->img->link_field}}?{{$item->img->cache_index}}" class="img--fluid owl-lazy" /> </div>
                                                        </div>
                                                        <div class="hidden" data-source="desc">
                                                            <div class="slide-in text--center">
                                                                <div class="slide-index">3.{{$i}}</div>
                                                                <div class="slide-title text--uppercase">{!! $item->{'item_title'.$lg} !!}</div>
                                                                <div class="slide-text">{!! $item->{'item_text'.$lg} !!}</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                        <div class="item-desc">
                                            <div class="carousel owl-carousel"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-7">
                                    <div class="item-in">
                                        <h3 class="hidden-xs"><span>3</span> {!! $process->{'item_title3'.$lg} !!}</h3>
                                        <div class="item-text">
                                            {!! $process->{'item_text3'.$lg} !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /step-item -->
                    </div>
                </div>
                <!-- /step-items-list -->
            </div>
        </div>
    </div>
    <!-- /page -->
@endsection
