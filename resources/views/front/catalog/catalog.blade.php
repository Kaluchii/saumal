@extends('front.layout')
@section('content')
    @include('front.catalog.meta')
    <!-- page -->
    <div class="page">
        <div class="container">
            <!-- rycle-informer -->
            <div class="rycle-informer rycle--empty"> <a href="/order" class="link--block link--rycle">
                    <i class="icon icon-rycle"></i>
                    <sup data-count>0</sup>
                </a> </div>
            <!-- /rycle-informer -->
            <div class="page-title text--center">
                <h1 class="title-1">@lang('order.title')</h1>
            </div>
        </div>
        <div class="page-content">
            <div class="container">
                <!-- section-catalog -->
                <section class="section section--catalog">
                    <div class="section-content">
                        <!-- items-list -->
                        <div class="items-list">
                            <div class="block-in" data-grid>
                            <?php $i = 0 ?>
                            @foreach($goods->goods_item_group as $item)
                                <?php $i++ ?>
                                <!-- item -->
                                <div class="item item--small">
                                    <div class="item-body">
                                        <div class="item-title">{!! $item->{'item_title'.$lg} !!}</div>
                                        <div class="item-price"> <strong>{{ number_format($item->price_field, 0, '', ' ') }}</strong> <span class="tenge">n</span> </div>
                                        <div class="item-img">
                                            <div class="img--centered" data-img-loader> <img src="{{$item->img->link_field}}?{{$item->img->cache_index}}" class="img--fluid" /> </div>
                                        </div>
                                        <div class="item-controls text--center">
                                            <button type="button" class="btn btn--blue btn--shadow btn--large btn--add" data-id="{{ $item->id_field }}"><span>@lang('order.btn')</span></button> <a href="/order" class="btn btn--blue btn--shadow btn--large btn--rycle">@lang('order.already')</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- /item -->
                            @endforeach
                            </div>
                        </div>
                        <!-- /items-list -->
                    </div>
                </section>
                <!-- /section-catalog -->
            </div>
        </div>
    </div>
    <!-- /page -->
@endsection
