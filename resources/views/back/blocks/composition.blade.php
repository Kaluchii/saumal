@extends('back.layout')
@section('content')
    @include('back.content-top', ['title' => 'Состав'])
    <div class="nav-tabs-custom">
        <ul class="nav nav-tabs">
            <li class="active"><a href="#tab_g1" data-toggle="tab"
                                  aria-expanded="true">Контент</a></li>
            <li><a href="#tab_g2" data-toggle="tab"
                   aria-expanded="false">Метаданные</a></li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane active" id="tab_g1">
                <div class="box box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Текстовый блок</h3>
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
                                           value="{{$composition->block_title_ru_field}}"
                                           data-name="block_title_ru"
                                           data-type="string"
                                           data-block="composition"
                                           data-id="0">
                                </div>
                                <div class="form-group">
                                    <label>Текст</label>
                                    <textarea class="form-control text"
                                              data-name="block_text_ru"
                                              data-type="text"
                                              data-block="composition"
                                              data-id="0">{{$composition->block_text_ru_field}}</textarea>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab_5">
                                <div class="form-group">
                                    <label>Заголовок</label>
                                    <input class="form-control string"
                                           type="text" placeholder=""
                                           value="{{$composition->block_title_kk_field}}"
                                           data-name="block_title_kk"
                                           data-type="string"
                                           data-block="composition"
                                           data-id="0">
                                </div>
                                <div class="form-group">
                                    <label>Текст</label>
                                    <textarea class="form-control text"
                                              data-name="block_text_kk"
                                              data-type="text"
                                              data-block="composition"
                                              data-id="0">{{$composition->block_text_kk_field}}</textarea>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab_6">
                                <div class="form-group">
                                    <label>Заголовок</label>
                                    <input class="form-control string"
                                           type="text" placeholder=""
                                           value="{{$composition->block_title_en_field}}"
                                           data-name="block_title_en"
                                           data-type="string"
                                           data-block="composition"
                                           data-id="0">
                                </div>
                                <div class="form-group">
                                    <label>Текст</label>
                                    <textarea class="form-control text"
                                              data-name="block_text_en"
                                              data-type="text"
                                              data-block="composition"
                                              data-id="0">{{$composition->block_text_en_field}}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="tab-pane" id="tab_g2">
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
                                       value="{{$composition->seotitle_ru_field}}"
                                       data-name="seotitle_ru"
                                       data-type="seo"
                                       data-block="composition"
                                       data-id="0">
                            </div>
                        </div>
                        <div class="tab-pane" id="tab_seo2">
                            <div class="form-group">
                                <label>Тайтл</label>
                                <input class="form-control string"
                                       type="text" placeholder=""
                                       value="{{$composition->seotitle_kk_field}}"
                                       data-name="seotitle_kk"
                                       data-type="seo"
                                       data-block="composition"
                                       data-id="0">
                            </div>
                        </div>
                        <div class="tab-pane" id="tab_seo3">
                            <div class="form-group">
                                <label>Тайтл</label>
                                <input class="form-control string"
                                       type="text" placeholder=""
                                       value="{{$composition->seotitle_en_field}}"
                                       data-name="seotitle_en"
                                       data-type="seo"
                                       data-block="composition"
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
                               value="{{$composition->seokeywords_field}}"
                               data-name="seokeywords"
                               data-type="seo"
                               data-block="composition"
                               data-id="0">
                    </div>
                    <div class="form-group">
                        <label>Описание страницы (description)</label>
                        <textarea class="form-control text"
                                  data-name="seodescription"
                                  data-type="seo"
                                  data-block="composition"
                                  data-id="0">{{$composition->seodescription_field}}</textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection