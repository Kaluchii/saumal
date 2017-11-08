@extends('back.layout')
@section('content')
    @include('back.content-top', ['title' => 'Город'])
    <div class="box box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">Поля для редактирования</h3>
        </div>
        <div class="box-body">
            <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#tab_1" data-toggle="tab"
                                          aria-expanded="true">Рус</a></li>
                    <li><a href="#tab_2" data-toggle="tab"
                           aria-expanded="false">Қаз</a></li>
                    <li><a href="#tab_3" data-toggle="tab"
                           aria-expanded="false">Eng</a></li>
                </ul>
                <div class="tab-content">

                    <div class="tab-pane active" id="tab_1">
                        <div class="form-group">
                            <label>Название города</label>
                            <input class="form-control string"
                                   type="text" placeholder=""
                                   value="{{$item->item_title_ru_field}}"
                                   data-name="item_title_ru"
                                   data-type="string"
                                   data-block="cities"
                                   data-id="{{$item->id_field}}">
                        </div>
                    </div>

                    <div class="tab-pane" id="tab_2">
                        <div class="form-group">
                            <label>Название города</label>
                            <input class="form-control string"
                                   type="text" placeholder=""
                                   value="{{$item->item_title_kk_field}}"
                                   data-name="item_title_kk"
                                   data-type="string"
                                   data-block="cities"
                                   data-id="{{$item->id_field}}">
                        </div>
                    </div>

                    <div class="tab-pane" id="tab_3">
                        <div class="form-group">
                            <label>Название города</label>
                            <input class="form-control string"
                                   type="text" placeholder=""
                                   value="{{$item->item_title_en_field}}"
                                   data-name="item_title_en"
                                   data-type="string"
                                   data-block="cities"
                                   data-id="{{$item->id_field}}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="box box-warning group-item-widget" data-block="sellers">
        <div class="box-header with-border">
            <h3 class="box-title">Релизаторы</h3>
            <button type="submit" data-parent="{{$item->id_field}}" class="btn btn-primary pull-right add-flat-item">Добавить</button>
        </div>
        <div class="box-body">
            <div class="groupflat-widget group-item-wrap">
                @foreach($item->sellers_group as $item)
                    @include('back.groups.sellers.sellers_box', ['item' => $item])
                @endforeach
            </div>
        </div>
    </div>
@endsection