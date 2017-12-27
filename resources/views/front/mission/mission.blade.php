@extends('front.layout')
@section('content')
    @include('front.mission.meta')
    <!-- page -->
    <div class="page">
        <div class="container">
            <div class="page-title text--center">
                <h2 class="title-1">@lang('all_page.about_company')</h2>
            </div>
            <div class="nav-content text--center">
                <ul class="list--inline">
                    <li class="active"> <a href="/mission">@lang('about_comp.mission')</a> </li>
                    <li> <a href="/factory">@lang('about_comp.factory')</a> </li>
                    <li> <a href="/process">@lang('about_comp.process')</a> </li>
                    {{--<li> <a href="/news">@lang('about_comp.news')</a> </li>--}}
                </ul>
            </div>
        </div>
        <div class="page-content">
            <div class="container">
                <!-- section-mission -->
                <section class="section section--mission">
                    <div class="section-content">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-7">
                                <h1 class="title-3">{!! $mission->{'block_title'.$lg} !!}</h1>
                                {!! $mission->{'block_text'.$lg} !!}
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-5">
                                <!-- item -->
                                <div class="item text--center">
                                    <div class="item-img">
                                        <div class="img--centered" data-img-loader> <img src="{{$mission->img->link_field}}?{{$mission->img->cache_index}}" class="img--fluid" /> </div>
                                    </div>
                                    <div class="item-title">{!! $mission->{'name'.$lg} !!}</div>
                                    <div class="item-meta">{!! $mission->{'under_name'.$lg} !!}</div>
                                </div>
                                <!-- /item -->
                            </div>
                        </div>
                    </div>
                </section>
                <!-- /section-mission -->
            </div>
        </div>
    </div>
    <!-- /page -->
@endsection
