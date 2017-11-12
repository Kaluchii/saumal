@extends('front.layout')
@section('content')
    @include('front.factory.meta')
    <!-- page -->
    <div class="page">
        <div class="container">
            <div class="page-title text--center">
                <h1 class="title-1">@lang('all_page.about_company')</h1>
            </div>
            <div class="nav-content text--center">
                <ul class="list--inline">
                    <li> <a href="/mission">@lang('about_comp.mission')</a> </li>
                    <li class="active"> <a href="/factory">@lang('about_comp.factory')</a> </li>
                    <li> <a href="/process">@lang('about_comp.process')</a> </li>
                    <li> <a href="/news">@lang('about_comp.news')</a> </li>
                </ul>
            </div>
        </div>
        <div class="page-content">
            <!-- section-zavod -->
            <section class="section section--zavod section--zavod-info">
                <div class="container">
                    <div class="section-content">
                        <div class="section-block">
                            <div class="row">
                                <div class="col-lg-6 col-lg-push-6 col-md-6 col-md-push-6">
                                    <h3 class="visible-xs">{!! $factory->{'item_title1'.$lg} !!}</h3>
                                    <div class="section-gallery">
                                        <div class="block-in" data-grid>
                                            <!-- item -->
                                            <div class="item"> <a href="img/pic-photo-01.png" class="link--block link--zoom" rel="gallery">
                                                    <img src="img/pic-thumb-01.png" srcset="img/pic-thumb-01.png 1x, img/pic-thumb-01@2x.png 2x" class="img--fluid" />
                                                </a> </div>
                                            <!-- /item -->
                                            <!-- item -->
                                            <div class="item"> <a href="img/pic-photo-02.png" class="link--block link--zoom" rel="gallery">
                                                    <img src="img/pic-thumb-02.png" class="img--fluid" />
                                                </a> </div>
                                            <!-- /item -->
                                            <!-- item -->
                                            <div class="item"> <a href="img/pic-photo-03.png" class="link--block link--zoom" rel="gallery">
                                                    <img src="img/pic-thumb-03.png" srcset="img/pic-thumb-03.png 1x, img/pic-thumb-03@2x.png 2x" class="img--fluid" />
                                                </a> </div>
                                            <!-- /item -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-lg-pull-6 col-md-6 col-md-pull-6">
                                    <div class="section-text">
                                        <h3 class="hidden-xs">{!! $factory->{'item_title1'.$lg} !!}</h3>
                                        {!! $factory->{'item_text1'.$lg} !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section-block">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-5">
                                    <h3 class="visible-xs">{!! $factory->{'item_title2'.$lg} !!}</h3>
                                    <div class="section-stats">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="item item--large"> <strong><span>{!! $factory->area_field !!}</span><span data-counter>{!! $factory->area_field !!}</span><small>@lang('about_comp.ga')</small></strong> @lang('about_comp.area') </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <div class="item"> <strong><span>{!! $factory->year_field !!}</span><span data-counter>{!! $factory->year_field !!}</span><small>@lang('about_comp.ton')</small></strong> @lang('about_comp.in_year') </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <div class="item"> <strong><span>{!! $factory->day_field !!}</span><span data-counter>{!! $factory->day_field !!}</span><small>@lang('about_comp.ton')</small></strong> @lang('about_comp.in_day') </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <div class="item"> <strong><span>{!! $factory->horses_field !!}</span><span data-counter>{!! $factory->horses_field !!}</span></strong> @lang('about_comp.horse_count') </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <div class="item"> <strong><span>{!! $factory->workers_field !!}</span><span data-counter>{!! $factory->workers_field !!}</span></strong> @lang('about_comp.work_count') </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-7">
                                    <div class="section-text">
                                        <h3 class="hidden-xs">{!! $factory->{'item_title2'.$lg} !!}</h3>
                                        {!! $factory->{'item_text2'.$lg} !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- /section-zavod -->
            <!-- section-zavod -->
            <section class="section section--zavod section--zavod-remark">
                <div class="container">
                    <div class="section-content">
                        <div class="block-table">
                            <div class="block-cell">{!! $factory->{'center_text'.$lg} !!}</div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- /section-zavod -->
            <!-- section-zavod -->
            <section class="section section--zavod section--zavod-horse">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="section-title">
                                <h3 class="title-3">{!! $factory->{'item_title3'.$lg} !!}</h3>
                            </div>
                            <div class="section-content">
                                {!! $factory->{'item_text3'.$lg} !!}
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="section-tip" data-animate>
                                <p>@lang('about_comp.horse')</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- /section-zavod -->
            <!-- section-zavod -->
            <section class="section section--zavod section--zavod-location">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-lg-push-6 col-md-6 col-md-push-6">
                            <div class="section-title">
                                <h3 class="title-3">{!! $factory->{'item_title4'.$lg} !!}</h3>
                            </div>
                            <div class="section-content">
                                {!! $factory->{'item_text4'.$lg} !!}
                            </div>
                        </div>
                        <div class="col-lg-6 col-lg-pull-6 col-md-6 col-md-pull-6">
                            <div class="section-map">
                                <div class="map" data-latitude="50.565762" data-longitude="72.565293" data-zoom="13" data-color="#ed4543"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- /section-zavod -->
        </div>
    </div>
    <!-- /page -->
@endsection
