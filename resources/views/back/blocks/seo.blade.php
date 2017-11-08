@extends('back.layout')
@section('content')
    @include('back.content-top', ['title' => 'Метаданные главной страницы'])
    <div class="box box box-info">
        <div class="box-header with-border">
        </div>
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#tab_seo1" data-toggle="tab" aria-expanded="true">Рус</a></li>
                <li><a href="#tab_seo2" data-toggle="tab" aria-expanded="false">Қаз</a></li>
                <li><a href="#tab_seo3" data-toggle="tab" aria-expanded="false">Eng</a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="tab_seo1">
                    <div class="form-group">
                        <label>Тайтл</label>
                        <input class="form-control string"
                               type="text" placeholder=""
                               value="{{$seo->seotitle_ru_field}}"
                               data-name="seotitle_ru"
                               data-type="seo"
                               data-block="slider"
                               data-id="0">
                    </div>
                </div>
                <div class="tab-pane" id="tab_seo2">
                    <div class="form-group">
                        <label>Тайтл</label>
                        <input class="form-control string"
                               type="text" placeholder=""
                               value="{{$seo->seotitle_kk_field}}"
                               data-name="seotitle_kk"
                               data-type="seo"
                               data-block="slider"
                               data-id="0">
                    </div>
                </div>
                <div class="tab-pane" id="tab_seo3">
                    <div class="form-group">
                        <label>Тайтл</label>
                        <input class="form-control string"
                               type="text" placeholder=""
                               value="{{$seo->seotitle_en_field}}"
                               data-name="seotitle_en"
                               data-type="seo"
                               data-block="slider"
                               data-id="0">
                    </div>
                </div>
            </div>
        </div>
        <div class="box-body">
            <div class="form-group">
                <label>Ключевые слова (keywords)</label>
                <input class="form-control string"
                       type="text" placeholder=""
                       value="{{$seo->seokeywords_field}}"
                       data-name="seokeywords"
                       data-type="seo"
                       data-block="slider"
                       data-id="0">
            </div>
            <div class="form-group">
                <label>Описание страницы (description)</label>
                <textarea class="form-control text"
                          data-name="seodescription"
                          data-type="seo"
                          data-block="slider"
                          data-id="0">{{$seo->seodescription_field}}</textarea>
            </div>
        </div>
    </div>
@endsection