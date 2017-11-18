<h2><a href="//saumal.kz">SAUMAL.KZ</a></h2><br>
<p style="font-weight: bold;">@lang('order.thanks')</p>
<p>@lang('order.data')</p>
<p>@lang('order.goods'):</p>
<p>
    {!! $order_list !!}
    <br>
    @lang('order.result'): {{$order_sum}}<small> ₸</small>
</p>
<p>
    @lang('order.addr'): {{$address}}
</p><br>
<p>@lang('order.soon')</p>
<p>@lang('order.questions')</p><br><br>
