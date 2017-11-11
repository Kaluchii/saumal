@extends('back.layout')
@section('content')
    @include('back.content-top', ['title' => 'Завод'])
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
                                           value="{{$factory->item_title1_ru_field}}"
                                           data-name="item_title1_ru"
                                           data-type="string"
                                           data-block="factory"
                                           data-id="0">
                                </div>
                                <div class="form-group">
                                    <label>Текст</label>
                                    <textarea class="form-control text-editor"
                                              data-name="item_text1_ru"
                                              data-type="text"
                                              data-block="factory"
                                              data-id="0">{{$factory->item_text1_ru_field}}</textarea>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab_5">
                                <div class="form-group">
                                    <label>Заголовок</label>
                                    <input class="form-control string"
                                           type="text" placeholder=""
                                           value="{{$factory->item_title1_kk_field}}"
                                           data-name="item_title1_kk"
                                           data-type="string"
                                           data-block="factory"
                                           data-id="0">
                                </div>
                                <div class="form-group">
                                    <label>Текст</label>
                                    <textarea class="form-control text-editor"
                                              data-name="item_text1_kk"
                                              data-type="text"
                                              data-block="factory"
                                              data-id="0">{{$factory->item_text1_kk_field}}</textarea>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab_6">
                                <div class="form-group">
                                    <label>Заголовок</label>
                                    <input class="form-control string"
                                           type="text" placeholder=""
                                           value="{{$factory->item_title1_en_field}}"
                                           data-name="item_title1_en"
                                           data-type="string"
                                           data-block="factory"
                                           data-id="0">
                                </div>
                                <div class="form-group">
                                    <label>Текст</label>
                                    <textarea class="form-control text-editor"
                                              data-name="item_text1_en"
                                              data-type="text"
                                              data-block="factory"
                                              data-id="0">{{$factory->item_text1_en_field}}</textarea>
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
                                           value="{{$factory->item_title2_ru_field}}"
                                           data-name="item_title2_ru"
                                           data-type="string"
                                           data-block="factory"
                                           data-id="0">
                                </div>
                                <div class="form-group">
                                    <label>Текст</label>
                                    <textarea class="form-control text-editor"
                                              data-name="item_text2_ru"
                                              data-type="text"
                                              data-block="factory"
                                              data-id="0">{{$factory->item_text2_ru_field}}</textarea>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab_8">
                                <div class="form-group">
                                    <label>Заголовок</label>
                                    <input class="form-control string"
                                           type="text" placeholder=""
                                           value="{{$factory->item_title2_kk_field}}"
                                           data-name="item_title2_kk"
                                           data-type="string"
                                           data-block="factory"
                                           data-id="0">
                                </div>
                                <div class="form-group">
                                    <label>Текст</label>
                                    <textarea class="form-control text-editor"
                                              data-name="item_text2_kk"
                                              data-type="text"
                                              data-block="factory"
                                              data-id="0">{{$factory->item_text2_kk_field}}</textarea>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab_9">
                                <div class="form-group">
                                    <label>Заголовок</label>
                                    <input class="form-control string"
                                           type="text" placeholder=""
                                           value="{{$factory->item_title2_en_field}}"
                                           data-name="item_title2_en"
                                           data-type="string"
                                           data-block="factory"
                                           data-id="0">
                                </div>
                                <div class="form-group">
                                    <label>Текст</label>
                                    <textarea class="form-control text-editor"
                                              data-name="item_text2_en"
                                              data-type="text"
                                              data-block="factory"
                                              data-id="0">{{$factory->item_text2_en_field}}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="box box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Завод в цифрах</h3>
                    </div>
                    <div class="box-body">
                        <div class="form-group">
                            <label>Площадь пастбищных земель</label>
                            <input class="form-control string"
                                   type="text" placeholder=""
                                   value="{{$factory->area_field}}"
                                   data-name="area"
                                   data-type="string"
                                   data-block="factory"
                                   data-id="0">
                        </div>
                        <div class="form-group">
                            <label>Тонн сублимированного молока в год</label>
                            <input class="form-control string"
                                   type="text" placeholder=""
                                   value="{{$factory->year_field}}"
                                   data-name="year"
                                   data-type="string"
                                   data-block="factory"
                                   data-id="0">
                        </div>
                        <div class="form-group">
                            <label>Тонн молока в сутки</label>
                            <input class="form-control string"
                                   type="text" placeholder=""
                                   value="{{$factory->day_field}}"
                                   data-name="day"
                                   data-type="string"
                                   data-block="factory"
                                   data-id="0">
                        </div>
                        <div class="form-group">
                            <label>Количество кобылиц</label>
                            <input class="form-control string"
                                   type="text" placeholder=""
                                   value="{{$factory->horses_field}}"
                                   data-name="horses"
                                   data-type="string"
                                   data-block="factory"
                                   data-id="0">
                        </div>
                        <div class="form-group">
                            <label>Количество рабочих мест</label>
                            <input class="form-control string"
                                   type="text" placeholder=""
                                   value="{{$factory->workers_field}}"
                                   data-name="workers"
                                   data-type="string"
                                   data-block="factory"
                                   data-id="0">
                        </div>
                    </div>
                </div>


                <div class="box box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Текстовый блок в центре</h3>
                    </div>
                    <div class="nav-tabs-custom">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#tab_19" data-toggle="tab" aria-expanded="true">Рус</a></li>
                            <li><a href="#tab_20" data-toggle="tab" aria-expanded="false">Қаз</a></li>
                            <li><a href="#tab_21" data-toggle="tab" aria-expanded="false">Eng</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tab_19">
                                <div class="form-group">
                                    <label>Текст</label>
                                    <textarea class="form-control text" data-reg="true"
                                              data-name="center_text_ru"
                                              data-type="text"
                                              data-block="factory"
                                              data-id="0">{{$factory->center_text_ru_field}}</textarea>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab_20">
                                <div class="form-group">
                                    <label>Текст</label>
                                    <textarea class="form-control text" data-reg="true"
                                              data-name="center_text_kk"
                                              data-type="text"
                                              data-block="factory"
                                              data-id="0">{{$factory->center_text_kk_field}}</textarea>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab_21">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label>Текст</label>
                                        <textarea class="form-control text" data-reg="true"
                                                  data-name="center_text_en"
                                                  data-type="text"
                                                  data-block="factory"
                                                  data-id="0">{{$factory->center_text_en_field}}</textarea>
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
                                               value="{{$factory->item_title3_ru_field}}"
                                               data-name="item_title3_ru"
                                               data-type="string"
                                               data-block="factory"
                                               data-id="0">
                                    </div>
                                    <div class="form-group">
                                        <label>Текст</label>
                                        <textarea class="form-control text-editor"
                                                  data-name="item_text3_ru"
                                                  data-type="text"
                                                  data-block="factory"
                                                  data-id="0">{{$factory->item_text3_ru_field}}</textarea>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab_11">
                                    <div class="form-group">
                                        <label>Заголовок</label>
                                        <input class="form-control string"
                                               type="text" placeholder=""
                                               value="{{$factory->item_title3_kk_field}}"
                                               data-name="item_title3_kk"
                                               data-type="string"
                                               data-block="factory"
                                               data-id="0">
                                    </div>
                                    <div class="form-group">
                                        <label>Текст</label>
                                        <textarea class="form-control text-editor"
                                                  data-name="item_text3_kk"
                                                  data-type="text"
                                                  data-block="factory"
                                                  data-id="0">{{$factory->item_text3_kk_field}}</textarea>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab_12">
                                    <div class="form-group">
                                        <label>Заголовок</label>
                                        <input class="form-control string"
                                               type="text" placeholder=""
                                               value="{{$factory->item_title3_en_field}}"
                                               data-name="item_title3_en"
                                               data-type="string"
                                               data-block="factory"
                                               data-id="0">
                                    </div>
                                    <div class="form-group">
                                        <label>Текст</label>
                                        <textarea class="form-control text-editor"
                                                  data-name="item_text3_en"
                                                  data-type="text"
                                                  data-block="factory"
                                                  data-id="0">{{$factory->item_text3_en_field}}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="box box box-info">
                        <div class="box-header with-border">
                            <h3 class="box-title">4-ый текстовый блок</h3>
                        </div>
                        <div class="nav-tabs-custom">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#tab_13" data-toggle="tab" aria-expanded="true">Рус</a></li>
                                <li><a href="#tab_14" data-toggle="tab" aria-expanded="false">Қаз</a></li>
                                <li><a href="#tab_15" data-toggle="tab" aria-expanded="false">Eng</a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="tab_13">
                                    <div class="form-group">
                                        <label>Заголовок</label>
                                        <input class="form-control string"
                                               type="text" placeholder=""
                                               value="{{$factory->item_title4_ru_field}}"
                                               data-name="item_title4_ru"
                                               data-type="string"
                                               data-block="factory"
                                               data-id="0">
                                    </div>
                                    <div class="form-group">
                                        <label>Текст</label>
                                        <textarea class="form-control text-editor"
                                                  data-name="item_text4_ru"
                                                  data-type="text"
                                                  data-block="factory"
                                                  data-id="0">{{$factory->item_text4_ru_field}}</textarea>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab_14">
                                    <div class="form-group">
                                        <label>Заголовок</label>
                                        <input class="form-control string"
                                               type="text" placeholder=""
                                               value="{{$factory->item_title4_kk_field}}"
                                               data-name="item_title4_kk"
                                               data-type="string"
                                               data-block="factory"
                                               data-id="0">
                                    </div>
                                    <div class="form-group">
                                        <label>Текст</label>
                                        <textarea class="form-control text-editor"
                                                  data-name="item_text4_kk"
                                                  data-type="text"
                                                  data-block="factory"
                                                  data-id="0">{{$factory->item_text4_kk_field}}</textarea>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab_15">
                                    <div class="form-group">
                                        <label>Заголовок</label>
                                        <input class="form-control string"
                                               type="text" placeholder=""
                                               value="{{$factory->item_title4_en_field}}"
                                               data-name="item_title4_en"
                                               data-type="string"
                                               data-block="factory"
                                               data-id="0">
                                    </div>
                                    <div class="form-group">
                                        <label>Текст</label>
                                        <textarea class="form-control text-editor"
                                                  data-name="item_text4_en"
                                                  data-type="text"
                                                  data-block="factory"
                                                  data-id="0">{{$factory->item_text4_en_field}}</textarea>
                                    </div>
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
                                       value="{{$factory->seotitle_ru_field}}"
                                       data-name="seotitle_ru"
                                       data-type="seo"
                                       data-block="factory"
                                       data-id="0">
                            </div>
                        </div>
                        <div class="tab-pane" id="tab_seo2">
                            <div class="form-group">
                                <label>Тайтл</label>
                                <input class="form-control string"
                                       type="text" placeholder=""
                                       value="{{$factory->seotitle_kk_field}}"
                                       data-name="seotitle_kk"
                                       data-type="seo"
                                       data-block="factory"
                                       data-id="0">
                            </div>
                        </div>
                        <div class="tab-pane" id="tab_seo3">
                            <div class="form-group">
                                <label>Тайтл</label>
                                <input class="form-control string"
                                       type="text" placeholder=""
                                       value="{{$factory->seotitle_en_field}}"
                                       data-name="seotitle_en"
                                       data-type="seo"
                                       data-block="factory"
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
                               value="{{$factory->seokeywords_field}}"
                               data-name="seokeywords"
                               data-type="seo"
                               data-block="factory"
                               data-id="0">
                    </div>
                    <div class="form-group">
                        <label>Описание страницы (description)</label>
                        <textarea class="form-control text"
                                  data-name="seodescription"
                                  data-type="seo"
                                  data-block="factory"
                                  data-id="0">{{$factory->seodescription_field}}</textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection