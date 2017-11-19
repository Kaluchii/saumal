@extends('front.layout')
@section('content')
    @include('front.order.meta')
    <!-- page -->
    <script>
        var declension = ['@lang('order.item1')', '@lang('order.item2')', '@lang('order.item3')']
    </script>
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
                <!-- form-rycle -->
                <div class="form--rycle">
                    <form action="/feedback/mail">
                        <fieldset>
                            <!-- items-list -->
                            <div class="items-list">
                                <div class="block-in">
                                    @foreach($orders as $item)
                                        <!-- item -->
                                            <div class="item clearfix" data-price="{{ $item[0]->price_field }}" data-id="{{ $item[0]->id_field }}">
                                                <div class="column column--img">
                                                    <div class="item-img">
                                                        <div class="block-table">
                                                            <div class="block-cell">
                                                                <div class="img--centered" data-img-loader> <img src="{{$item[0]->img->link_field}}?{{$item[0]->img->cache_index}}" class="img--fluid" /> </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="column column--in clearfix">
                                                    <div class="column column--title">
                                                        <div class="item-title">{!! $item[0]->{'item_title'.$lg} !!}</div>
                                                    </div>
                                                    <div class="column column--calc">
                                                        <div class="item-calc"> <label>@lang('order.count')</label>
                                                            <div class="item-calc-in"> <button type="button" class="btn--unstyled btn--calc btn--minus"><i class="icon icon-minus"></i></button> <input type="text" class="form-control inp--calc" value="{{ $item['count'] }}" data-min="1" data-max="10" readonly /> <button type="button"
                                                                                                                                                                                                                                                                                                            class="btn--unstyled btn--calc btn--plus"><i class="icon icon-plus"></i></button> </div>
                                                        </div>
                                                    </div>
                                                    <div class="column column--price">
                                                        <div class="item-price"> <label>@lang('order.price')</label> <strong data-output="price"></strong> <span class="tenge">n</span> </div>
                                                    </div>
                                                </div> <button type="button" class="btn--unstyled btn--remove"><i class="icon icon-minus"></i></button> </div>
                                            <!-- /item -->
                                    @endforeach
                                </div>
                                <div class="list-amount clearfix">
                                    <div class="pull-left"> <label>@lang('order.pic')</label> <strong data-output="count"></strong> </div>
                                    <div class="pull-right">
                                        <div class="div-inner text--right">
                                            <div class="div-in text--left"> <label>@lang('order.result')</label> <strong data-output="amount"></strong> <span class="tenge">n</span> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /items-list -->
                        </fieldset>
                        <fieldset>
                            <h3>@lang('order.ordering')</h3>
                            <div class="form-body">
                                <div class="form-in">
                                    <input type="hidden" name="form" value="order" required>
                                    <div class="form-group clearfix"> <label class="control-label">@lang('order.name')</label>
                                        <div class="controls"> <input type="text" class="form-control" name="client_name" required /> </div>
                                    </div>
                                    <div class="form-group clearfix"> <label class="control-label">@lang('order.email')</label>
                                        <div class="controls"> <input type="email" class="form-control" name="email" required /> </div>
                                    </div>
                                    <div class="form-group clearfix group--phone"> <label class="control-label">@lang('order.tel')</label>
                                        <div class="controls"> <span class="prefix">+7</span> <input type="tel" class="form-control" name="phone" data-mask="(999) 999-99-99" required /> </div>
                                    </div>
                                    <div class="form-group clearfix group--city"> <label class="control-label">@lang('order.city')</label>
                                        <div class="controls"> <input type="text" class="form-control" name="city" required /> </div>
                                    </div>
                                    <div class="form-group clearfix group--address"> <label class="control-label">@lang('order.addr')</label>
                                        <div class="controls"> <input type="text" class="form-control" name="address" required /> </div>
                                    </div>
                                    <div class="form-group clearfix group--payment"> <label class="control-label">@lang('order.payment')</label>
                                        <div class="controls">
                                            <label class="control-label"><input type="radio" class="form-control" name="payment" value="cash" required checked />@lang('order.cash')</label>
                                            <label class="control-label"><input type="radio" class="form-control" name="payment" value="kkb" required /> KKB Epay</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-controls clearfix">
                                    <div class="pull-left"> <a href="/catalog" class="btn btn--white btn--back"><i class="icon icon-back"></i> <span>@lang('order.back')</span></a> </div>
                                    <div class="pull-right"> <button type="submit" class="btn btn--blue btn--shadow btn--submit"><span>@lang('order.checkout')</span></button> </div>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
                <!-- /form-rycle -->
            </div>
        </div>
    </div>
    <!-- /page -->
@endsection
