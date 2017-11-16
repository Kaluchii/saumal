@extends('front.layout')
@section('content')
    @include('front.index.meta')
    <!-- page -->
    <div class="page">
        <div class="page-content">
            <!-- section-promo -->
            <section class="section section--promo">
                <div class="carousel owl-carousel" data-interval="7000">
                    @foreach($slider->slide_group as $item)
                    <!-- slide -->
                    <div class="slide">
                        <div class="slide-body">
                            <div class="container">
                                <div class="slide-in">
                                    <div class="block-table">
                                        <div class="block-cell">
                                            <div class="row">
                                                <div class="col-lg-5 col-lg-offset-7 col-md-5 col-md-offset-7 col-sm-5 col-sm-offset-6">
                                                    <h2 class="title-1">{!! $item->{'slide_title'.$lg} !!}</h2>
                                                    <p>{!! $item->{'slide_text'.$lg} !!}</p> <a href="{{ $item->btn_link_field  }}" class="btn btn--blue btn--shadow btn--large">{{ $item->{'btn_text'.$lg} }}</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slide-cover hidden-xs"> <img data-src="{{$item->slide->link_field}}?{{$item->slide->cache_index}}" class="img--fluid owl-lazy" /> </div>
                        <div class="slide-cover visible-xs"> <img data-src="{{$item->mob_slide->link_field}}?{{$item->mob_slide->cache_index}}" class="img--fluid owl-lazy" /> </div>
                    </div>
                    <!-- /slide -->
                    @endforeach
                </div>
            </section>
            <!-- /section-promo -->
            <!-- section-target -->
            <section class="section section--target">
                <div class="container">
                    <div class="section-title text--center">
                        <h3 class="title-1">{!! $home_utility->{'block_title'.$lg} !!}</h3>
                    </div>
                    <div class="section-content">
                        <!-- items-list -->
                        <div class="items-list">
                            <div class="row block-in">
                                <div class="col-lg-6 col-md-6">
                                    <!-- item -->
                                    <div class="item item--pregnant">
                                        <a href="/utility#pregnant" class="link--block">
                                            <h5>{!! $home_utility->{'item_title1'.$lg} !!}</h5>
                                            <div class="item-text hidden-xs">{!! $home_utility->{'item_text1'.$lg} !!}</div>
                                            <div class="item-img" data-img-loader> <img src="{{$home_utility->img1->link_field}}?{{$home_utility->img1->cache_index}}" class="img--fluid" /> </div> <span class="item-more text--center text--white">
									<span class="hidden-xs">@lang('index.more_info')</span> <span class="visible-xs-inline">@lang('index.learn_more')</span> </span>
                                        </a>
                                    </div>
                                    <!-- /item -->
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <!-- item -->
                                    <div class="item item--children">
                                        <a href="/utility#children" class="link--block">
                                            <h5>{!! $home_utility->{'item_title2'.$lg} !!}</h5>
                                            <div class="item-text hidden-xs">{!! $home_utility->{'item_text2'.$lg} !!}</div>
                                            <div class="item-img" data-img-loader> <img src="{{$home_utility->img2->link_field}}?{{$home_utility->img2->cache_index}}" class="img--fluid" /> </div> <span class="item-more text--center text--white">
									<span class="hidden-xs">@lang('index.more_info')</span> <span class="visible-xs-inline">@lang('index.learn_more')</span> </span>
                                        </a>
                                    </div>
                                    <!-- /item -->
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <!-- item -->
                                    <div class="item item--age">
                                        <a href="/utility#age" class="link--block">
                                            <h5>{!! $home_utility->{'item_title3'.$lg} !!}</h5>
                                            <div class="item-text hidden-xs">{!! $home_utility->{'item_text3'.$lg} !!}</div>
                                            <div class="item-img" data-img-loader> <img src="{{$home_utility->img3->link_field}}?{{$home_utility->img3->cache_index}}" class="img--fluid" /> </div> <span class="item-more text--center text--white">
									<span class="hidden-xs">@lang('index.more_info')</span> <span class="visible-xs-inline">@lang('index.learn_more')</span> </span>
                                        </a>
                                    </div>
                                    <!-- /item -->
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <!-- item -->
                                    <div class="item item--sport">
                                        <a href="/utility#sport" class="link--block">
                                            <h5>{!! $home_utility->{'item_title4'.$lg} !!}</h5>
                                            <div class="item-text hidden-xs">{!! $home_utility->{'item_text4'.$lg} !!}</div>
                                            <div class="item-img" data-img-loader> <img src="{{$home_utility->img4->link_field}}?{{$home_utility->img4->cache_index}}" class="img--fluid" /> </div> <span class="item-more text--center text--white">
									<span class="hidden-xs">@lang('index.more_info')</span> <span class="visible-xs-inline">@lang('index.learn_more')</span> </span>
                                        </a>
                                    </div>
                                    <!-- /item -->
                                </div>
                            </div>
                        </div>
                        <!-- /items-list -->
                    </div>
                </div>
            </section>
            <!-- /section-target -->
            <!-- section-profit -->
            <section class="section section--profit">
                <div class="container">
                    <div class="section-title text--center">
                        <h3 class="title-1 hidden-xs">{!! $home_influence->{'block_title'.$lg} !!}</h3>
                        <h3 class="title-1 visible-xs">{!! $home_influence->{'mob_block_title'.$lg} !!}</h3>
                    </div>
                    <div class="section-content clearfix">
                        <div class="column column--left">
                            <div class="hidden-xs">
                                <!-- nav-category -->
                                <div class="nav-category mode--2">
                                    <ul class="list--unstyled" role="tablist">
                                        <li role="presentation" class="active"> <a href="#tab-nervous" aria-controls="tab-nervous" role="tab" data-toggle="tab">
                                                <i class="icon icon-nervous"></i> <span>@lang('index.sys1')</span>
                                            </a> </li>
                                        <li role="presentation"> <a href="#tab-circulatory" aria-controls="tab-circulatory" role="tab" data-toggle="tab">
                                                <i class="icon icon-circulatory"></i> <span>@lang('index.sys2')</span>
                                            </a> </li>
                                        <li role="presentation"> <a href="#tab-respiratory" aria-controls="tab-respiratory" role="tab" data-toggle="tab">
                                                <i class="icon icon-respiratory"></i> <span>@lang('index.sys3')</span>
                                            </a> </li>
                                        <li role="presentation"> <a href="#tab-digestive" aria-controls="tab-digestive" role="tab" data-toggle="tab">
                                                <i class="icon icon-digestive"></i> <span>@lang('index.sys4')</span>
                                            </a> </li>
                                        <li role="presentation"> <a href="#tab-endocrine" aria-controls="tab-endocrine" role="tab" data-toggle="tab">
                                                <i class="icon icon-endocrine"></i> <span>@lang('index.sys5')</span>
                                            </a> </li>
                                        <li role="presentation"> <a href="#tab-cover" aria-controls="tab-cover" role="tab" data-toggle="tab">
                                                <i class="icon icon-cover"></i> <span>@lang('index.sys6')</span>
                                            </a> </li>
                                    </ul>
                                </div>
                                <!-- /nav-category -->
                            </div>
                            <div class="visible-xs">
                                <!-- nav-category -->
                                <div class="nav-category mode--2">
                                    <ul class="list--unstyled">
                                        <li> <a href="/influence#nervous">
                                                <i class="icon icon-nervous"></i> <span>@lang('index.sys1')</span>
                                            </a> </li>
                                        <li> <a href="/influence#circulatory">
                                                <i class="icon icon-circulatory"></i> <span>@lang('index.sys2')</span>
                                            </a> </li>
                                        <li> <a href="/influence#respiratory">
                                                <i class="icon icon-respiratory"></i> <span>@lang('index.sys3')</span>
                                            </a> </li>
                                        <li> <a href="/influence#digestive">
                                                <i class="icon icon-digestive"></i> <span>@lang('index.sys4')</span>
                                            </a> </li>
                                        <li> <a href="/influence#endocrine">
                                                <i class="icon icon-endocrine"></i> <span>@lang('index.sys5')</span>
                                            </a> </li>
                                        <li> <a href="/influence#cover">
                                                <i class="icon icon-cover"></i> <span>@lang('index.sys6')</span>
                                            </a> </li>
                                    </ul>
                                </div>
                                <!-- /nav-category -->
                            </div>
                        </div>
                        <div class="column column--right clearfix hidden-xs">
                            <div class="column column--schema">
                                <img src="{{$home_influence->img1->link_field}}?{{$home_influence->img1->cache_index}}" class="img--fluid active" data-img="tab-nervous" />
                                <img src="{{$home_influence->img2->link_field}}?{{$home_influence->img2->cache_index}}" class="img--fluid" data-img="tab-circulatory" />
                                <img src="{{$home_influence->img3->link_field}}?{{$home_influence->img3->cache_index}}" class="img--fluid" data-img="tab-respiratory" />
                                <img src="{{$home_influence->img4->link_field}}?{{$home_influence->img4->cache_index}}" class="img--fluid" data-img="tab-digestive" />
                                <img src="{{$home_influence->img5->link_field}}?{{$home_influence->img5->cache_index}}" class="img--fluid" data-img="tab-endocrine" />
                                <img src="{{$home_influence->img6->link_field}}?{{$home_influence->img6->cache_index}}" class="img--fluid" data-img="tab-cover" />
                            </div>
                            <div class="column column--tab">
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade in active" id="tab-nervous">
                                        <h3>{!! $home_influence->{'item_title1'.$lg} !!}</h3>
                                        {!! $home_influence->{'item_text1'.$lg} !!}
                                        <a href="/influence#nervous" class="btn btn--blue btn--shadow btn--large btn--more">@lang('index.learn_about')</a>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="tab-circulatory">
                                        <h3>{!! $home_influence->{'item_title2'.$lg} !!}</h3>
                                        {!! $home_influence->{'item_text2'.$lg} !!}
                                        <a href="/influence#circulatory" class="btn btn--blue btn--shadow btn--large btn--more">@lang('index.learn_about')</a>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="tab-respiratory">
                                        <h3>{!! $home_influence->{'item_title3'.$lg} !!}</h3>
                                        {!! $home_influence->{'item_text3'.$lg} !!}
                                        <a href="/influence#respiratory" class="btn btn--blue btn--shadow btn--large btn--more">@lang('index.learn_about')</a>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="tab-digestive">
                                        <h3>{!! $home_influence->{'item_title4'.$lg} !!}</h3>
                                        {!! $home_influence->{'item_text4'.$lg} !!}
                                        <a href="/influence#digestive" class="btn btn--blue btn--shadow btn--large btn--more">@lang('index.learn_about')</a>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="tab-endocrine">
                                        <h3>{!! $home_influence->{'item_title5'.$lg} !!}</h3>
                                        {!! $home_influence->{'item_text5'.$lg} !!}
                                        <a href="/influence#endocrine" class="btn btn--blue btn--shadow btn--large btn--more">@lang('index.learn_about')</a>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="tab-cover">
                                        <h3>{!! $home_influence->{'item_title6'.$lg} !!}</h3>
                                        {!! $home_influence->{'item_text6'.$lg} !!}
                                        <a href="/influence#cover" class="btn btn--blue btn--shadow btn--large btn--more">@lang('index.learn_about')</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- /section-profit-->
            <!-- section-production -->
            <section class="section section--production">
                <div class="container">
                    <div class="section-content">
                        <div class="section-hero">
                            <div class="block-table">
                                <div class="block-cell">
                                    <div class="section-title">
                                        <h3 class="title-1">{!! $home_process->{'block_title'.$lg} !!}</h3>
                                    </div>
                                    <p>{!! $home_process->{'block_text'.$lg} !!}</p>
                                </div>
                            </div>
                        </div>
                        <?php $i = 0 ?>
                        @foreach($home_process->home_stages_group as $item)
                            <!-- items-list -->
                                <?php $i++ ?>
                                <div class="items-list step--1">
                                    <h3><span>{{ $i }}</span> {!! $item->{'stage_title'.$lg} !!}</h3>
                                    <div class="block-in">
                                        <!-- item -->
                                        <div class="item hidden-xs">
                                            <div class="item-body">
                                                <div class="item-title text--uppercase text--blue">{!! $item->{'part1'.$lg} !!}</div>
                                                <div class="item-text">{!! $item->{'part1_text'.$lg} !!}</div>
                                            </div>
                                        </div>
                                        <!-- /item -->
                                        <!-- item -->
                                        <div class="item hidden-xs">
                                            <div class="item-body">
                                                <div class="item-title text--uppercase text--blue">{!! $item->{'part2'.$lg} !!}</div>
                                                <div class="item-text">{!! $item->{'part2_text'.$lg} !!}</div>
                                            </div>
                                        </div>
                                        <!-- /item -->
                                        <!-- item -->
                                        <div class="item item--accent">
                                            <div class="item-body">
                                                <div class="item-text">{!! $item->{'fact'.$lg} !!}</div>
                                                <div class="item-img"> <img src="{{$item->img->link_field}}?{{$item->img->cache_index}}" class="img--fluid" /> </div>
                                            </div>
                                        </div>
                                        <!-- /item -->
                                    </div>
                                </div>
                                <!-- /items-list -->
                        @endforeach
                        <div class="section-controls"> <a href="/process" class="btn btn--blue btn--shadow btn--large">@lang('index.about_process')</a>
                            <div class="hidden-xs">{!! $home_process->{'bottom_text'.$lg} !!}</div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- /section-production -->
            <!-- section-news -->
            <section class="section section--news">
                <div class="container">
                    <div class="section-title text--center">
                        <h3 class="title-1">@lang('all_page.news')</h3>
                    </div>
                    <div class="section-content">
                        <!-- items-list -->
                        <div class="items-list">
                            <div class="row block-in carousel">
                                @foreach($news->news_item_group as $item)
                                    <div class="col-lg-3 col-md-3">
                                        <!-- item -->
                                        <div class="item">
                                            <a href="/news/{{ $item->slug_field }}" class="link--block">
                                                <div class="item-img">
                                                    <div class="ratio hidden-xs" data-img-loader> <img data-src="{{$item->preview->link_field}}?{{$item->preview->cache_index}}" data-src-retina="{{$item->preview->link_field}}?{{$item->preview->cache_index}}" class="img--fluid owl-lazy" /> </div>
                                                    <div class="ratio visible-xs" data-img-loader> <img src="{{$item->mob_preview->link_field}}?{{$item->mob_preview->cache_index}}" srcset="{{$item->mob_preview->link_field}}?{{$item->mob_preview->cache_index}} 1x, {{$item->mob_preview->link_field}}?{{$item->mob_preview->cache_index}} 2x" class="img--fluid" /> </div>
                                                </div>
                                                <div class="item-title text--black">{!! $item->{'item_title'.$lg} !!}</div>
                                            </a>
                                        </div>
                                        <!-- /item -->
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <!-- /items-list -->
                    </div>
                </div>
            </section>
            <!-- /section-news -->
        </div>
    </div>
    <!-- /page -->
@endsection
