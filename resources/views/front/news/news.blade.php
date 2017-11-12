@extends('front.layout')
@section('content')
    @include('front.news.meta')
    <!-- page -->
    <div class="page page--news">
        <div class="container">
            <div class="page-title text--center">
                <h2 class="title-1">@lang('all_page.about_company')</h2>
            </div>
            <div class="nav-content text--center">
                <ul class="list--inline">
                    <li> <a href="/mission">@lang('about_comp.mission')</a> </li>
                    <li> <a href="/factory">@lang('about_comp.factory')</a> </li>
                    <li> <a href="/process">@lang('about_comp.process')</a> </li>
                    <li class="active"> <a href="/news">@lang('about_comp.news')</a> </li>
                </ul>
            </div>
        </div>
        <div class="page-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3">
                        <!-- news-items-list -->
                        <div class="news-items-list">
                            <h3 class="title-3">@lang('about_comp.news')</h3>
                            <div class="block-in">
                                @foreach($news_list->news_item_group as $item)
                                    <!-- news-item -->
                                    <div class="news-item"> <time class="item-date">{{ $item->pub_date_field }}</time>
                                        <div class="item-title"> <a href="news/{{ $item->slug_field }}" class="js_news_item">{!! $item->{'item_title'.$lg} !!}</a> </div>
                                    </div>
                                    <!-- /news-item -->
                                @endforeach</div>
                        </div>
                        <!-- /news-items-list -->
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-9">
                        <!-- section-default -->
                        <section class="section section--default">
                            <div class="section-content clearfix">
                                <h1>{!! $news->{'item_title'.$lg} !!}</h1>
                                {!! $news->{'item_text'.$lg} !!}
                                <!-- share-item -->
                                <div class="share-item">
                                    <div class="social-likes">
                                        <div class="facebook" title="Поделиться ссылкой на Фейсбуке">@lang('news.share')</div>
                                        <div class="vkontakte" title="Поделиться ссылкой во Вконтакте">@lang('news.share')</div>
                                        <div class="twitter" title="Поделиться ссылкой в Твиттере">@lang('news.twit')</div>
                                    </div>
                                </div>
                                <!-- /share-item -->
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
