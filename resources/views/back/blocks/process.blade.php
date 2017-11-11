@extends('back.layout')
@section('content')
    @include('back.content-top', ['title' => 'Процесс производства'])
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
                            <li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="true">Рус</a></li>
                            <li><a href="#tab_2" data-toggle="tab" aria-expanded="false">Қаз</a></li>
                            <li><a href="#tab_3" data-toggle="tab" aria-expanded="false">Eng</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tab_1">
                                <div class="form-group">
                                    <label>Заголовок</label>
                                    <input class="form-control string"
                                           type="text" placeholder=""
                                           value="{{$process->top_title_ru_field}}"
                                           data-name="top_title_ru"
                                           data-type="string"
                                           data-block="process"
                                           data-id="0">
                                </div>
                                <div class="form-group">
                                    <label>Текст</label>
                                    <textarea class="form-control text-editor"
                                              data-name="top_text_ru"
                                              data-type="text"
                                              data-block="process"
                                              data-id="0">{{$process->top_text_ru_field}}</textarea>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab_2">
                                <div class="form-group">
                                    <label>Заголовок</label>
                                    <input class="form-control string"
                                           type="text" placeholder=""
                                           value="{{$process->top_title_kk_field}}"
                                           data-name="top_title_kk"
                                           data-type="string"
                                           data-block="process"
                                           data-id="0">
                                </div>
                                <div class="form-group">
                                    <label>Текст</label>
                                    <textarea class="form-control text-editor"
                                              data-name="top_text_kk"
                                              data-type="text"
                                              data-block="process"
                                              data-id="0">{{$process->top_text_kk_field}}</textarea>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab_3">
                                <div class="form-group">
                                    <label>Заголовок</label>
                                    <input class="form-control string"
                                           type="text" placeholder=""
                                           value="{{$process->top_title_en_field}}"
                                           data-name="top_title_en"
                                           data-type="string"
                                           data-block="process"
                                           data-id="0">
                                </div>
                                <div class="form-group">
                                    <label>Текст</label>
                                    <textarea class="form-control text-editor"
                                              data-name="top_text_en"
                                              data-type="text"
                                              data-block="process"
                                              data-id="0">{{$process->top_text_en_field}}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="box box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">1-ый этап</h3>
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
                                           value="{{$process->item_title1_ru_field}}"
                                           data-name="item_title1_ru"
                                           data-type="string"
                                           data-block="process"
                                           data-id="0">
                                </div>
                                <div class="form-group">
                                    <label>Текст</label>
                                    <textarea class="form-control text-editor"
                                              data-name="item_text1_ru"
                                              data-type="text"
                                              data-block="process"
                                              data-id="0">{{$process->item_text1_ru_field}}</textarea>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab_5">
                                <div class="form-group">
                                    <label>Заголовок</label>
                                    <input class="form-control string"
                                           type="text" placeholder=""
                                           value="{{$process->item_title1_kk_field}}"
                                           data-name="item_title1_kk"
                                           data-type="string"
                                           data-block="process"
                                           data-id="0">
                                </div>
                                <div class="form-group">
                                    <label>Текст</label>
                                    <textarea class="form-control text-editor"
                                              data-name="item_text1_kk"
                                              data-type="text"
                                              data-block="process"
                                              data-id="0">{{$process->item_text1_kk_field}}</textarea>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab_6">
                                <div class="form-group">
                                    <label>Заголовок</label>
                                    <input class="form-control string"
                                           type="text" placeholder=""
                                           value="{{$process->item_title1_en_field}}"
                                           data-name="item_title1_en"
                                           data-type="string"
                                           data-block="process"
                                           data-id="0">
                                </div>
                                <div class="form-group">
                                    <label>Текст</label>
                                    <textarea class="form-control text-editor"
                                              data-name="item_text1_en"
                                              data-type="text"
                                              data-block="process"
                                              data-id="0">{{$process->item_text1_en_field}}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box box-warning group-item-widget" data-block="part1">
                        <div class="box-header with-border">
                            <h3 class="box-title">Подэтапы 1-го этапа</h3>
                            <button type="submit" data-parent="0" class="btn btn-primary pull-right add-flat-item">Добавить</button>
                        </div>
                        <div class="box-body">
                            <div class="groupflat-widget group-item-wrap">
                                @foreach($process->part1_group as $item)
                                    @include('back.groups.part1.part1_box', ['item' => $item])
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>


                <div class="box box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">2-ой этап</h3>
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
                                           value="{{$process->item_title2_ru_field}}"
                                           data-name="item_title2_ru"
                                           data-type="string"
                                           data-block="process"
                                           data-id="0">
                                </div>
                                <div class="form-group">
                                    <label>Текст</label>
                                    <textarea class="form-control text-editor"
                                              data-name="item_text2_ru"
                                              data-type="text"
                                              data-block="process"
                                              data-id="0">{{$process->item_text2_ru_field}}</textarea>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab_8">
                                <div class="form-group">
                                    <label>Заголовок</label>
                                    <input class="form-control string"
                                           type="text" placeholder=""
                                           value="{{$process->item_title2_kk_field}}"
                                           data-name="item_title2_kk"
                                           data-type="string"
                                           data-block="process"
                                           data-id="0">
                                </div>
                                <div class="form-group">
                                    <label>Текст</label>
                                    <textarea class="form-control text-editor"
                                              data-name="item_text2_kk"
                                              data-type="text"
                                              data-block="process"
                                              data-id="0">{{$process->item_text2_kk_field}}</textarea>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab_9">
                                <div class="form-group">
                                    <label>Заголовок</label>
                                    <input class="form-control string"
                                           type="text" placeholder=""
                                           value="{{$process->item_title2_en_field}}"
                                           data-name="item_title2_en"
                                           data-type="string"
                                           data-block="process"
                                           data-id="0">
                                </div>
                                <div class="form-group">
                                    <label>Текст</label>
                                    <textarea class="form-control text-editor"
                                              data-name="item_text2_en"
                                              data-type="text"
                                              data-block="process"
                                              data-id="0">{{$process->item_text2_en_field}}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box box-warning group-item-widget" data-block="part2">
                        <div class="box-header with-border">
                            <h3 class="box-title">Подэтапы 2-го этапа</h3>
                            <button type="submit" data-parent="0" class="btn btn-primary pull-right add-flat-item">Добавить</button>
                        </div>
                        <div class="box-body">
                            <div class="groupflat-widget group-item-wrap">
                                @foreach($process->part2_group as $item)
                                    @include('back.groups.part2.part2_box', ['item' => $item])
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>


                <div class="box box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">3-ий этап</h3>
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
                                           value="{{$process->item_title3_ru_field}}"
                                           data-name="item_title3_ru"
                                           data-type="string"
                                           data-block="process"
                                           data-id="0">
                                </div>
                                <div class="form-group">
                                    <label>Текст</label>
                                    <textarea class="form-control text-editor"
                                              data-name="item_text3_ru"
                                              data-type="text"
                                              data-block="process"
                                              data-id="0">{{$process->item_text3_ru_field}}</textarea>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab_11">
                                <div class="form-group">
                                    <label>Заголовок</label>
                                    <input class="form-control string"
                                           type="text" placeholder=""
                                           value="{{$process->item_title3_kk_field}}"
                                           data-name="item_title3_kk"
                                           data-type="string"
                                           data-block="process"
                                           data-id="0">
                                </div>
                                <div class="form-group">
                                    <label>Текст</label>
                                    <textarea class="form-control text-editor"
                                              data-name="item_text3_kk"
                                              data-type="text"
                                              data-block="process"
                                              data-id="0">{{$process->item_text3_kk_field}}</textarea>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab_12">
                                <div class="form-group">
                                    <label>Заголовок</label>
                                    <input class="form-control string"
                                           type="text" placeholder=""
                                           value="{{$process->item_title3_en_field}}"
                                           data-name="item_title3_en"
                                           data-type="string"
                                           data-block="process"
                                           data-id="0">
                                </div>
                                <div class="form-group">
                                    <label>Текст</label>
                                    <textarea class="form-control text-editor"
                                              data-name="item_text3_en"
                                              data-type="text"
                                              data-block="process"
                                              data-id="0">{{$process->item_text3_en_field}}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box box-warning group-item-widget" data-block="part3">
                        <div class="box-header with-border">
                            <h3 class="box-title">Подэтапы 3-го этапа</h3>
                            <button type="submit" data-parent="0" class="btn btn-primary pull-right add-flat-item">Добавить</button>
                        </div>
                        <div class="box-body">
                            <div class="groupflat-widget group-item-wrap">
                                @foreach($process->part3_group as $item)
                                    @include('back.groups.part3.part3_box', ['item' => $item])
                                @endforeach
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
                                       value="{{$process->seotitle_ru_field}}"
                                       data-name="seotitle_ru"
                                       data-type="seo"
                                       data-block="process"
                                       data-id="0">
                            </div>
                        </div>
                        <div class="tab-pane" id="tab_seo2">
                            <div class="form-group">
                                <label>Тайтл</label>
                                <input class="form-control string"
                                       type="text" placeholder=""
                                       value="{{$process->seotitle_kk_field}}"
                                       data-name="seotitle_kk"
                                       data-type="seo"
                                       data-block="process"
                                       data-id="0">
                            </div>
                        </div>
                        <div class="tab-pane" id="tab_seo3">
                            <div class="form-group">
                                <label>Тайтл</label>
                                <input class="form-control string"
                                       type="text" placeholder=""
                                       value="{{$process->seotitle_en_field}}"
                                       data-name="seotitle_en"
                                       data-type="seo"
                                       data-block="process"
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
                               value="{{$process->seokeywords_field}}"
                               data-name="seokeywords"
                               data-type="seo"
                               data-block="process"
                               data-id="0">
                    </div>
                    <div class="form-group">
                        <label>Описание страницы (description)</label>
                        <textarea class="form-control text"
                                  data-name="seodescription"
                                  data-type="seo"
                                  data-block="process"
                                  data-id="0">{{$process->seodescription_field}}</textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection