@extends('back.layout')
@section('content')
    @include('back.content-top', ['title' => 'Для всего сайта'])
    <div class="box box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">Поля для редактирования</h3>
        </div>
        <div class="box-body">
            <div class="form-group">
                <label>Корирайт</label>
                <input class="form-control string"
                       type="text" placeholder=""
                       value="{{$all_site->copyright_field}}"
                       data-name="copyright"
                       data-type="string"
                       data-block="all_site"
                       data-id="0">
            </div>
            <div class="form-group">
                <label>Инстаграм</label>
                <input class="form-control string"
                       type="text" placeholder=""
                       value="{{$all_site->inst_field}}"
                       data-name="inst"
                       data-type="string"
                       data-block="all_site"
                       data-id="0">
            </div>
            <div class="form-group">
                <label>Фэйсбук</label>
                <input class="form-control string"
                       type="text" placeholder=""
                       value="{{$all_site->fb_field}}"
                       data-name="fb"
                       data-type="string"
                       data-block="all_site"
                       data-id="0">
            </div>

            <div class="form-group">
                <label>Поле для вставки скриптов (перед закрывающим тегом head)</label>
                <textarea class="form-control text"
                          data-name="before_head_close"
                          data-type="text"
                          data-block="scripts"
                          data-id="0">{{$scripts->before_head_close_field}}</textarea>
            </div>
            <div class="form-group">
                <label>Поле для вставки скриптов (после открывающего тега body)</label>
                <textarea class="form-control text"
                          data-name="after_open"
                          data-type="text"
                          data-block="scripts"
                          data-id="0">{{$scripts->after_open_field}}</textarea>
            </div>
            <div class="form-group">
                <label>Поле для вставки скриптов (перед закрывающим тегом body)</label>
                <textarea class="form-control text"
                          data-name="before_close"
                          data-type="text"
                          data-block="scripts"
                          data-id="0">{{$scripts->before_close_field}}</textarea>
            </div>
        </div>
    </div>


    <div class="box box-info group-item-widget" data-block="phones">
        <div class="box-header with-border">
            <h3 class="box-title"> Номера телефонов </h3>
            <button type="submit" data-parent="0" class="btn btn-primary pull-right add-flat-item">Добавить</button>
        </div>
        <div class="box-body">

            <div class="groupflat-widget group-item-wrap">
                @foreach($all_site->phones_group as $item)
                    @include('back.groups.phones.phones_box', ['item' => $item])
                @endforeach
            </div>
        </div>
    </div>
@endsection