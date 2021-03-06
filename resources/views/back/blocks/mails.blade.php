@extends('back.layout')
@section('content')

    @include('back.content-top', ['title' => 'Почта'])

    <div class="box box-info group-item-widget"
         data-block="order_mailto">
        <div class="box-header with-border">
            <h3 class="box-title"> Получатели писем (заказов) </h3>
            <button type="submit" data-parent="0" class="btn btn-primary pull-right add-flat-item">Добавить</button>
        </div>
        <div class="box-body">

            <div class="groupflat-widget group-item-wrap">
                @foreach($order->order_mailto_group as $item)
                    @include('back.groups.order_mailto.order_mailto_box', ['item' => $item])
                @endforeach
            </div>
        </div>
    </div>

@endsection