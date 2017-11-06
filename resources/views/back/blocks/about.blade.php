@extends('back.layout')
@section('content')
    @include('back.content-top', ['title' => 'О продукте'])
    <div class="box box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">1-ый текстовый блок</h3>
        </div>
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#tab_4" data-toggle="tab" aria-expanded="true">Рус</a></li>
                <li><a href="#tab_5" data-toggle="tab" aria-expanded="false">Қаз</a></li>
                <li><a href="#tab_6" data-toggle="tab" aria-expanded="false">Eng</a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="tab_4">
                        <div class="form-group">
                            <label>Заголовок</label>
                            <input class="form-control string"
                                   type="text" placeholder=""
                                   value="{{$about->item_title1_ru_field}}"
                                   data-name="item_title1_ru"
                                   data-type="string"
                                   data-block="about"
                                   data-id="0">
                        </div>
                        <div class="form-group">
                            <label>Текст</label>
                            <textarea class="form-control text"
                                      data-name="item_text1_ru"
                                      data-type="text"
                                      data-block="about"
                                      data-id="0">{{$about->item_text1_ru_field}}</textarea>
                        </div>
                </div>
                <div class="tab-pane" id="tab_5">
                        <div class="form-group">
                            <label>Заголовок</label>
                            <input class="form-control string"
                                   type="text" placeholder=""
                                   value="{{$about->item_title1_kk_field}}"
                                   data-name="item_title1_kk"
                                   data-type="string"
                                   data-block="about"
                                   data-id="0">
                        </div>
                        <div class="form-group">
                            <label>Текст</label>
                            <textarea class="form-control text"
                                      data-name="item_text1_kk"
                                      data-type="text"
                                      data-block="about"
                                      data-id="0">{{$about->item_text1_kk_field}}</textarea>
                        </div>
                </div>
                <div class="tab-pane" id="tab_6">
                    <div class="form-group">
                        <label>Заголовок</label>
                        <input class="form-control string"
                               type="text" placeholder=""
                               value="{{$about->item_title1_en_field}}"
                               data-name="item_title1_en"
                               data-type="string"
                               data-block="about"
                               data-id="0">
                    </div>
                    <div class="form-group">
                        <label>Текст</label>
                        <textarea class="form-control text"
                                  data-name="item_text1_en"
                                  data-type="text"
                                  data-block="about"
                                  data-id="0">{{$about->item_text1_en_field}}</textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="box box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">2-ой текстовый блок</h3>
        </div>
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#tab_7" data-toggle="tab" aria-expanded="true">Рус</a></li>
                <li><a href="#tab_8" data-toggle="tab" aria-expanded="false">Қаз</a></li>
                <li><a href="#tab_9" data-toggle="tab" aria-expanded="false">Eng</a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="tab_7">
                        <div class="form-group">
                            <label>Заголовок</label>
                            <input class="form-control string"
                                   type="text" placeholder=""
                                   value="{{$about->item_title2_ru_field}}"
                                   data-name="item_title2_ru"
                                   data-type="string"
                                   data-block="about"
                                   data-id="0">
                        </div>
                        <div class="form-group">
                            <label>Текст</label>
                            <textarea class="form-control text"
                                      data-name="item_text2_ru"
                                      data-type="text"
                                      data-block="about"
                                      data-id="0">{{$about->item_text2_ru_field}}</textarea>
                        </div>
                </div>
                <div class="tab-pane" id="tab_8">
                        <div class="form-group">
                            <label>Заголовок</label>
                            <input class="form-control string"
                                   type="text" placeholder=""
                                   value="{{$about->item_title2_kk_field}}"
                                   data-name="item_title2_kk"
                                   data-type="string"
                                   data-block="about"
                                   data-id="0">
                        </div>
                        <div class="form-group">
                            <label>Текст</label>
                            <textarea class="form-control text"
                                      data-name="item_text2_kk"
                                      data-type="text"
                                      data-block="about"
                                      data-id="0">{{$about->item_text2_kk_field}}</textarea>
                        </div>
                </div>
                <div class="tab-pane" id="tab_9">
                        <div class="form-group">
                            <label>Заголовок</label>
                            <input class="form-control string"
                                   type="text" placeholder=""
                                   value="{{$about->item_title2_en_field}}"
                                   data-name="item_title2_en"
                                   data-type="string"
                                   data-block="about"
                                   data-id="0">
                        </div>
                        <div class="form-group">
                            <label>Текст</label>
                            <textarea class="form-control text"
                                      data-name="item_text2_en"
                                      data-type="text"
                                      data-block="about"
                                      data-id="0">{{$about->item_text2_en_field}}</textarea>
                        </div>
                </div>
            </div>
        </div>
    </div>


    <div class="box box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">3-ий текстовый блок</h3>
        </div>
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#tab_10" data-toggle="tab" aria-expanded="true">Рус</a></li>
                <li><a href="#tab_11" data-toggle="tab" aria-expanded="false">Қаз</a></li>
                <li><a href="#tab_12" data-toggle="tab" aria-expanded="false">Eng</a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="tab_10">
                        <div class="form-group">
                            <label>Заголовок</label>
                            <input class="form-control string"
                                   type="text" placeholder=""
                                   value="{{$about->item_title3_ru_field}}"
                                   data-name="item_title3_ru"
                                   data-type="string"
                                   data-block="about"
                                   data-id="0">
                        </div>
                        <div class="form-group">
                            <label>Текст</label>
                            <textarea class="form-control text"
                                      data-name="item_text3_ru"
                                      data-type="text"
                                      data-block="about"
                                      data-id="0">{{$about->item_text3_ru_field}}</textarea>
                        </div>
                </div>
                <div class="tab-pane" id="tab_11">
                        <div class="form-group">
                            <label>Заголовок</label>
                            <input class="form-control string"
                                   type="text" placeholder=""
                                   value="{{$about->item_title3_kk_field}}"
                                   data-name="item_title3_kk"
                                   data-type="string"
                                   data-block="about"
                                   data-id="0">
                        </div>
                        <div class="form-group">
                            <label>Текст</label>
                            <textarea class="form-control text"
                                      data-name="item_text3_kk"
                                      data-type="text"
                                      data-block="about"
                                      data-id="0">{{$about->item_text3_kk_field}}</textarea>
                        </div>
                </div>
                <div class="tab-pane" id="tab_12">
                        <div class="form-group">
                            <label>Заголовок</label>
                            <input class="form-control string"
                                   type="text" placeholder=""
                                   value="{{$about->item_title3_en_field}}"
                                   data-name="item_title3_en"
                                   data-type="string"
                                   data-block="about"
                                   data-id="0">
                        </div>
                        <div class="form-group">
                            <label>Текст</label>
                            <textarea class="form-control text"
                                      data-name="item_text3_en"
                                      data-type="text"
                                      data-block="about"
                                      data-id="0">{{$about->item_text3_en_field}}</textarea>
                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection