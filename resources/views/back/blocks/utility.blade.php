@extends('back.layout')
@section('content')
    @include('back.content-top', ['title' => 'Кому полезен'])
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
                        <h3 class="box-title">Поля для редактирования</h3>
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
                                    <label>Заголовок верхнего блока</label>
                                    <input class="form-control string"
                                           type="text" placeholder=""
                                           value="{{$utility->block_title_ru_field}}"
                                           data-name="block_title_ru"
                                           data-type="string"
                                           data-block="utility"
                                           data-id="0">
                                </div>
                                <div class="form-group">
                                    <label>Текст в верхнем блоке</label>
                                    <textarea class="form-control text text-editor"
                                              data-name="block_text_ru"
                                              data-type="text"
                                              data-block="utility"
                                              data-id="0">{{$utility->block_text_ru_field}}</textarea>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab_2">
                                <div class="form-group">
                                    <label>Заголовок верхнего блока</label>
                                    <input class="form-control string"
                                           type="text" placeholder=""
                                           value="{{$utility->block_title_kk_field}}"
                                           data-name="block_title_kk"
                                           data-type="string"
                                           data-block="utility"
                                           data-id="0">
                                </div>
                                <div class="form-group">
                                    <label>Текст в верхнем блоке</label>
                                    <textarea class="form-control text text-editor"
                                              data-name="block_text_kk"
                                              data-type="text"
                                              data-block="utility"
                                              data-id="0">{{$utility->block_text_kk_field}}</textarea>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab_3">
                                <div class="form-group">
                                    <label>Заголовок верхнего блока</label>
                                    <input class="form-control string"
                                           type="text" placeholder=""
                                           value="{{$utility->block_title_en_field}}"
                                           data-name="block_title_en"
                                           data-type="string"
                                           data-block="utility"
                                           data-id="0">
                                </div>
                                <div class="form-group">
                                    <label>Текст в верхнем блоке</label>
                                    <textarea class="form-control text text-editor"
                                              data-name="block_text_en"
                                              data-type="text"
                                              data-block="utility"
                                              data-id="0">{{$utility->block_text_en_field}}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="box box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">1-ый факт</h3>
                    </div>
                    <div class="nav-tabs-custom">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#tab_f4" data-toggle="tab" aria-expanded="true">Рус</a></li>
                            <li><a href="#tab_f5" data-toggle="tab" aria-expanded="false">Қаз</a></li>
                            <li><a href="#tab_f6" data-toggle="tab" aria-expanded="false">Eng</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tab_f4">
                                <div class="form-group">
                                    <label>Заголовок</label>
                                    <input class="form-control string"
                                           type="text" placeholder=""
                                           value="{{$utility->fact_title1_ru_field}}"
                                           data-name="fact_title1_ru"
                                           data-type="string"
                                           data-block="utility"
                                           data-id="0">
                                </div>
                                <div class="form-group">
                                    <label>Текст</label>
                                    <textarea class="form-control text"
                                              data-name="fact_text1_ru"
                                              data-type="text"
                                              data-block="utility"
                                              data-id="0">{{$utility->fact_text1_ru_field}}</textarea>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab_f5">
                                <div class="form-group">
                                    <label>Заголовок</label>
                                    <input class="form-control string"
                                           type="text" placeholder=""
                                           value="{{$utility->fact_title1_kk_field}}"
                                           data-name="fact_title1_kk"
                                           data-type="string"
                                           data-block="utility"
                                           data-id="0">
                                </div>
                                <div class="form-group">
                                    <label>Текст</label>
                                    <textarea class="form-control text"
                                              data-name="fact_text1_kk"
                                              data-type="text"
                                              data-block="utility"
                                              data-id="0">{{$utility->fact_text1_kk_field}}</textarea>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab_f6">
                                <div class="form-group">
                                    <label>Заголовок</label>
                                    <input class="form-control string"
                                           type="text" placeholder=""
                                           value="{{$utility->fact_title1_en_field}}"
                                           data-name="fact_title1_en"
                                           data-type="string"
                                           data-block="utility"
                                           data-id="0">
                                </div>
                                <div class="form-group">
                                    <label>Текст</label>
                                    <textarea class="form-control text"
                                              data-name="fact_text1_en"
                                              data-type="text"
                                              data-block="utility"
                                              data-id="0">{{$utility->fact_text1_en_field}}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="box box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">2-ой факт</h3>
                    </div>
                    <div class="nav-tabs-custom">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#tab_f7" data-toggle="tab" aria-expanded="true">Рус</a></li>
                            <li><a href="#tab_f8" data-toggle="tab" aria-expanded="false">Қаз</a></li>
                            <li><a href="#tab_f9" data-toggle="tab" aria-expanded="false">Eng</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tab_f7">
                                <div class="form-group">
                                    <label>Заголовок</label>
                                    <input class="form-control string"
                                           type="text" placeholder=""
                                           value="{{$utility->fact_title2_ru_field}}"
                                           data-name="fact_title2_ru"
                                           data-type="string"
                                           data-block="utility"
                                           data-id="0">
                                </div>
                                <div class="form-group">
                                    <label>Текст</label>
                                    <textarea class="form-control text"
                                              data-name="fact_text2_ru"
                                              data-type="text"
                                              data-block="utility"
                                              data-id="0">{{$utility->fact_text2_ru_field}}</textarea>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab_f8">
                                <div class="form-group">
                                    <label>Заголовок</label>
                                    <input class="form-control string"
                                           type="text" placeholder=""
                                           value="{{$utility->fact_title2_kk_field}}"
                                           data-name="fact_title2_kk"
                                           data-type="string"
                                           data-block="utility"
                                           data-id="0">
                                </div>
                                <div class="form-group">
                                    <label>Текст</label>
                                    <textarea class="form-control text"
                                              data-name="fact_text2_kk"
                                              data-type="text"
                                              data-block="utility"
                                              data-id="0">{{$utility->fact_text2_kk_field}}</textarea>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab_f9">
                                <div class="form-group">
                                    <label>Заголовок</label>
                                    <input class="form-control string"
                                           type="text" placeholder=""
                                           value="{{$utility->fact_title2_en_field}}"
                                           data-name="fact_title2_en"
                                           data-type="string"
                                           data-block="utility"
                                           data-id="0">
                                </div>
                                <div class="form-group">
                                    <label>Текст</label>
                                    <textarea class="form-control text"
                                              data-name="fact_text2_en"
                                              data-type="text"
                                              data-block="utility"
                                              data-id="0">{{$utility->fact_text2_en_field}}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="box box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">3-ий факт</h3>
                    </div>
                    <div class="nav-tabs-custom">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#tab_f10" data-toggle="tab" aria-expanded="true">Рус</a></li>
                            <li><a href="#tab_f11" data-toggle="tab" aria-expanded="false">Қаз</a></li>
                            <li><a href="#tab_f12" data-toggle="tab" aria-expanded="false">Eng</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tab_f10">
                                <div class="form-group">
                                    <label>Заголовок</label>
                                    <input class="form-control string"
                                           type="text" placeholder=""
                                           value="{{$utility->fact_title3_ru_field}}"
                                           data-name="fact_title3_ru"
                                           data-type="string"
                                           data-block="utility"
                                           data-id="0">
                                </div>
                                <div class="form-group">
                                    <label>Текст</label>
                                    <textarea class="form-control text"
                                              data-name="fact_text3_ru"
                                              data-type="text"
                                              data-block="utility"
                                              data-id="0">{{$utility->fact_text3_ru_field}}</textarea>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab_f11">
                                <div class="form-group">
                                    <label>Заголовок</label>
                                    <input class="form-control string"
                                           type="text" placeholder=""
                                           value="{{$utility->fact_title3_kk_field}}"
                                           data-name="fact_title3_kk"
                                           data-type="string"
                                           data-block="utility"
                                           data-id="0">
                                </div>
                                <div class="form-group">
                                    <label>Текст</label>
                                    <textarea class="form-control text"
                                              data-name="fact_text3_kk"
                                              data-type="text"
                                              data-block="utility"
                                              data-id="0">{{$utility->fact_text3_kk_field}}</textarea>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab_f12">
                                <div class="form-group">
                                    <label>Заголовок</label>
                                    <input class="form-control string"
                                           type="text" placeholder=""
                                           value="{{$utility->fact_title3_en_field}}"
                                           data-name="fact_title3_en"
                                           data-type="string"
                                           data-block="utility"
                                           data-id="0">
                                </div>
                                <div class="form-group">
                                    <label>Текст</label>
                                    <textarea class="form-control text"
                                              data-name="fact_text3_en"
                                              data-type="text"
                                              data-block="utility"
                                              data-id="0">{{$utility->fact_text3_en_field}}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="box box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">4-ый факт</h3>
                    </div>
                    <div class="nav-tabs-custom">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#tab_f13" data-toggle="tab" aria-expanded="true">Рус</a></li>
                            <li><a href="#tab_f14" data-toggle="tab" aria-expanded="false">Қаз</a></li>
                            <li><a href="#tab_f15" data-toggle="tab" aria-expanded="false">Eng</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tab_f13">
                                <div class="form-group">
                                    <label>Заголовок</label>
                                    <input class="form-control string"
                                           type="text" placeholder=""
                                           value="{{$utility->fact_title4_ru_field}}"
                                           data-name="fact_title4_ru"
                                           data-type="string"
                                           data-block="utility"
                                           data-id="0">
                                </div>
                                <div class="form-group">
                                    <label>Текст</label>
                                    <textarea class="form-control text"
                                              data-name="fact_text4_ru"
                                              data-type="text"
                                              data-block="utility"
                                              data-id="0">{{$utility->fact_text4_ru_field}}</textarea>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab_f14">
                                <div class="form-group">
                                    <label>Заголовок</label>
                                    <input class="form-control string"
                                           type="text" placeholder=""
                                           value="{{$utility->fact_title4_kk_field}}"
                                           data-name="fact_title4_kk"
                                           data-type="string"
                                           data-block="utility"
                                           data-id="0">
                                </div>
                                <div class="form-group">
                                    <label>Текст</label>
                                    <textarea class="form-control text"
                                              data-name="fact_text4_kk"
                                              data-type="text"
                                              data-block="utility"
                                              data-id="0">{{$utility->fact_text4_kk_field}}</textarea>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab_f15">
                                <div class="form-group">
                                    <label>Заголовок</label>
                                    <input class="form-control string"
                                           type="text" placeholder=""
                                           value="{{$utility->fact_title4_en_field}}"
                                           data-name="fact_title4_en"
                                           data-type="string"
                                           data-block="utility"
                                           data-id="0">
                                </div>
                                <div class="form-group">
                                    <label>Текст</label>
                                    <textarea class="form-control text"
                                              data-name="fact_text4_en"
                                              data-type="text"
                                              data-block="utility"
                                              data-id="0">{{$utility->fact_text4_en_field}}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="box box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">1-ая категория</h3>
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
                                           value="{{$utility->item_title1_ru_field}}"
                                           data-name="item_title1_ru"
                                           data-type="string"
                                           data-block="utility"
                                           data-id="0">
                                </div>
                                <div class="form-group">
                                    <label>Текст</label>
                                    <textarea class="form-control text text-editor"
                                              data-name="item_text1_ru"
                                              data-type="text"
                                              data-block="utility"
                                              data-id="0">{{$utility->item_text1_ru_field}}</textarea>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab_5">
                                <div class="form-group">
                                    <label>Заголовок</label>
                                    <input class="form-control string"
                                           type="text" placeholder=""
                                           value="{{$utility->item_title1_kk_field}}"
                                           data-name="item_title1_kk"
                                           data-type="string"
                                           data-block="utility"
                                           data-id="0">
                                </div>
                                <div class="form-group">
                                    <label>Текст</label>
                                    <textarea class="form-control text text-editor"
                                              data-name="item_text1_kk"
                                              data-type="text"
                                              data-block="utility"
                                              data-id="0">{{$utility->item_text1_kk_field}}</textarea>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab_6">
                                <div class="form-group">
                                    <label>Заголовок</label>
                                    <input class="form-control string"
                                           type="text" placeholder=""
                                           value="{{$utility->item_title1_en_field}}"
                                           data-name="item_title1_en"
                                           data-type="string"
                                           data-block="utility"
                                           data-id="0">
                                </div>
                                <div class="form-group">
                                    <label>Текст</label>
                                    <textarea class="form-control text text-editor"
                                              data-name="item_text1_en"
                                              data-type="text"
                                              data-block="utility"
                                              data-id="0">{{$utility->item_text1_en_field}}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="form-group">
                            <label>Изображение (420 x 420 px)</label>
                            <div class="dropzone">
                                <div class="file-input">
                                    <div class="file-preview">
                                        <div class="input-group file-caption-main">
                                            <div class="file-preview-frame">
                                                <div class="kv-file-content">
                                                    <img src="{{$utility->img1_field->link}}?{{$utility->img1_field->cache_index}}"
                                                         class="kv-preview-data file-preview-image"
                                                         title="{{$utility->img1_field->alt}}" alt="{{$utility->img1_field->alt}}">
                                                </div>
                                                <div class="file-thumbnail-footer">
                                                    <div class="file-actions">
                                                        <input type="text" class="form-control alt-text" data-block="utility"
                                                               data-type="images" data-id="0" data-name="alt"
                                                               value="{{$utility->img1_field->alt}}">
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-group-btn">
                                            <button type="button" tabindex="500" title="Clear selected files"
                                                    class="btn btn-default fileinput-remove fileinput-remove-button"><i
                                                        class="glyphicon glyphicon-trash"></i> <span
                                                        class="hidden-xs">Очистить</span></button>
                                            <button type="button" tabindex="500" title="Abort ongoing upload"
                                                    class="btn btn-default hide fileinput-cancel fileinput-cancel-button"><i
                                                        class="glyphicon glyphicon-ban-circle"></i> <span
                                                        class="hidden-xs">Cancel</span></button>
                                            <div tabindex="500" class="btn btn-primary btn-file">
                                                <i class="glyphicon glyphicon-folder-open"></i>&nbsp;
                                                <span class="hidden-xs">Выбрать изображение …</span>
                                                <input type="file" class="form-control file"
                                                       data-block="utility"
                                                       data-name="img1"
                                                       data-type="image"
                                                       data-id="0">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="box box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">2-ая категория</h3>
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
                                           value="{{$utility->item_title2_ru_field}}"
                                           data-name="item_title2_ru"
                                           data-type="string"
                                           data-block="utility"
                                           data-id="0">
                                </div>
                                <div class="form-group">
                                    <label>Текст</label>
                                    <textarea class="form-control text text-editor"
                                              data-name="item_text2_ru"
                                              data-type="text"
                                              data-block="utility"
                                              data-id="0">{{$utility->item_text2_ru_field}}</textarea>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab_8">
                                <div class="form-group">
                                    <label>Заголовок</label>
                                    <input class="form-control string"
                                           type="text" placeholder=""
                                           value="{{$utility->item_title2_kk_field}}"
                                           data-name="item_title2_kk"
                                           data-type="string"
                                           data-block="utility"
                                           data-id="0">
                                </div>
                                <div class="form-group">
                                    <label>Текст</label>
                                    <textarea class="form-control text text-editor"
                                              data-name="item_text2_kk"
                                              data-type="text"
                                              data-block="utility"
                                              data-id="0">{{$utility->item_text2_kk_field}}</textarea>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab_9">
                                <div class="form-group">
                                    <label>Заголовок</label>
                                    <input class="form-control string"
                                           type="text" placeholder=""
                                           value="{{$utility->item_title2_en_field}}"
                                           data-name="item_title2_en"
                                           data-type="string"
                                           data-block="utility"
                                           data-id="0">
                                </div>
                                <div class="form-group">
                                    <label>Текст</label>
                                    <textarea class="form-control text text-editor"
                                              data-name="item_text2_en"
                                              data-type="text"
                                              data-block="utility"
                                              data-id="0">{{$utility->item_text2_en_field}}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="form-group">
                            <label>Изображение (420 x 420 px)</label>
                            <div class="dropzone">
                                <div class="file-input">
                                    <div class="file-preview">
                                        <div class="input-group file-caption-main">
                                            <div class="file-preview-frame">
                                                <div class="kv-file-content">
                                                    <img src="{{$utility->img2_field->link}}?{{$utility->img2_field->cache_index}}"
                                                         class="kv-preview-data file-preview-image"
                                                         title="{{$utility->img2_field->alt}}" alt="{{$utility->img2_field->alt}}">
                                                </div>
                                                <div class="file-thumbnail-footer">
                                                    <div class="file-actions">
                                                        <input type="text" class="form-control alt-text" data-block="utility"
                                                               data-type="images" data-id="0" data-name="alt"
                                                               value="{{$utility->img2_field->alt}}">
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-group-btn">
                                            <button type="button" tabindex="500" title="Clear selected files"
                                                    class="btn btn-default fileinput-remove fileinput-remove-button"><i
                                                        class="glyphicon glyphicon-trash"></i> <span
                                                        class="hidden-xs">Очистить</span></button>
                                            <button type="button" tabindex="500" title="Abort ongoing upload"
                                                    class="btn btn-default hide fileinput-cancel fileinput-cancel-button"><i
                                                        class="glyphicon glyphicon-ban-circle"></i> <span
                                                        class="hidden-xs">Cancel</span></button>
                                            <div tabindex="500" class="btn btn-primary btn-file">
                                                <i class="glyphicon glyphicon-folder-open"></i>&nbsp;
                                                <span class="hidden-xs">Выбрать изображение …</span>
                                                <input type="file" class="form-control file"
                                                       data-block="utility"
                                                       data-name="img2"
                                                       data-type="image"
                                                       data-id="0">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="box box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">3-я категория</h3>
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
                                           value="{{$utility->item_title3_ru_field}}"
                                           data-name="item_title3_ru"
                                           data-type="string"
                                           data-block="utility"
                                           data-id="0">
                                </div>
                                <div class="form-group">
                                    <label>Текст</label>
                                    <textarea class="form-control text text-editor"
                                              data-name="item_text3_ru"
                                              data-type="text"
                                              data-block="utility"
                                              data-id="0">{{$utility->item_text3_ru_field}}</textarea>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab_11">
                                <div class="form-group">
                                    <label>Заголовок</label>
                                    <input class="form-control string"
                                           type="text" placeholder=""
                                           value="{{$utility->item_title3_kk_field}}"
                                           data-name="item_title3_kk"
                                           data-type="string"
                                           data-block="utility"
                                           data-id="0">
                                </div>
                                <div class="form-group">
                                    <label>Текст</label>
                                    <textarea class="form-control text text-editor"
                                              data-name="item_text3_kk"
                                              data-type="text"
                                              data-block="utility"
                                              data-id="0">{{$utility->item_text3_kk_field}}</textarea>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab_12">
                                <div class="form-group">
                                    <label>Заголовок</label>
                                    <input class="form-control string"
                                           type="text" placeholder=""
                                           value="{{$utility->item_title3_en_field}}"
                                           data-name="item_title3_en"
                                           data-type="string"
                                           data-block="utility"
                                           data-id="0">
                                </div>
                                <div class="form-group">
                                    <label>Текст</label>
                                    <textarea class="form-control text text-editor"
                                              data-name="item_text3_en"
                                              data-type="text"
                                              data-block="utility"
                                              data-id="0">{{$utility->item_text3_en_field}}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="form-group">
                            <label>Изображение (420 x 420 px)</label>
                            <div class="dropzone">
                                <div class="file-input">
                                    <div class="file-preview">
                                        <div class="input-group file-caption-main">
                                            <div class="file-preview-frame">
                                                <div class="kv-file-content">
                                                    <img src="{{$utility->img3_field->link}}?{{$utility->img3_field->cache_index}}"
                                                         class="kv-preview-data file-preview-image"
                                                         title="{{$utility->img3_field->alt}}" alt="{{$utility->img3_field->alt}}">
                                                </div>
                                                <div class="file-thumbnail-footer">
                                                    <div class="file-actions">
                                                        <input type="text" class="form-control alt-text" data-block="utility"
                                                               data-type="images" data-id="0" data-name="alt"
                                                               value="{{$utility->img3_field->alt}}">
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-group-btn">
                                            <button type="button" tabindex="500" title="Clear selected files"
                                                    class="btn btn-default fileinput-remove fileinput-remove-button"><i
                                                        class="glyphicon glyphicon-trash"></i> <span
                                                        class="hidden-xs">Очистить</span></button>
                                            <button type="button" tabindex="500" title="Abort ongoing upload"
                                                    class="btn btn-default hide fileinput-cancel fileinput-cancel-button"><i
                                                        class="glyphicon glyphicon-ban-circle"></i> <span
                                                        class="hidden-xs">Cancel</span></button>
                                            <div tabindex="500" class="btn btn-primary btn-file">
                                                <i class="glyphicon glyphicon-folder-open"></i>&nbsp;
                                                <span class="hidden-xs">Выбрать изображение …</span>
                                                <input type="file" class="form-control file"
                                                       data-block="utility"
                                                       data-name="img3"
                                                       data-type="image"
                                                       data-id="0">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="box box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">4-ая категория</h3>
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
                                           value="{{$utility->item_title4_ru_field}}"
                                           data-name="item_title4_ru"
                                           data-type="string"
                                           data-block="utility"
                                           data-id="0">
                                </div>
                                <div class="form-group">
                                    <label>Текст</label>
                                    <textarea class="form-control text text-editor"
                                              data-name="item_text4_ru"
                                              data-type="text"
                                              data-block="utility"
                                              data-id="0">{{$utility->item_text4_ru_field}}</textarea>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab_14">
                                <div class="form-group">
                                    <label>Заголовок</label>
                                    <input class="form-control string"
                                           type="text" placeholder=""
                                           value="{{$utility->item_title4_kk_field}}"
                                           data-name="item_title4_kk"
                                           data-type="string"
                                           data-block="utility"
                                           data-id="0">
                                </div>
                                <div class="form-group">
                                    <label>Текст</label>
                                    <textarea class="form-control text text-editor"
                                              data-name="item_text4_kk"
                                              data-type="text"
                                              data-block="utility"
                                              data-id="0">{{$utility->item_text4_kk_field}}</textarea>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab_15">
                                <div class="form-group">
                                    <label>Заголовок</label>
                                    <input class="form-control string"
                                           type="text" placeholder=""
                                           value="{{$utility->item_title4_en_field}}"
                                           data-name="item_title4_en"
                                           data-type="string"
                                           data-block="utility"
                                           data-id="0">
                                </div>
                                <div class="form-group">
                                    <label>Текст</label>
                                    <textarea class="form-control text text-editor"
                                              data-name="item_text4_en"
                                              data-type="text"
                                              data-block="utility"
                                              data-id="0">{{$utility->item_text4_en_field}}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="form-group">
                            <label>Изображение (420 x 420 px)</label>
                            <div class="dropzone">
                                <div class="file-input">
                                    <div class="file-preview">
                                        <div class="input-group file-caption-main">
                                            <div class="file-preview-frame">
                                                <div class="kv-file-content">
                                                    <img src="{{$utility->img4_field->link}}?{{$utility->img4_field->cache_index}}"
                                                         class="kv-preview-data file-preview-image"
                                                         title="{{$utility->img4_field->alt}}" alt="{{$utility->img4_field->alt}}">
                                                </div>
                                                <div class="file-thumbnail-footer">
                                                    <div class="file-actions">
                                                        <input type="text" class="form-control alt-text" data-block="utility"
                                                               data-type="images" data-id="0" data-name="alt"
                                                               value="{{$utility->img4_field->alt}}">
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-group-btn">
                                            <button type="button" tabindex="500" title="Clear selected files"
                                                    class="btn btn-default fileinput-remove fileinput-remove-button"><i
                                                        class="glyphicon glyphicon-trash"></i> <span
                                                        class="hidden-xs">Очистить</span></button>
                                            <button type="button" tabindex="500" title="Abort ongoing upload"
                                                    class="btn btn-default hide fileinput-cancel fileinput-cancel-button"><i
                                                        class="glyphicon glyphicon-ban-circle"></i> <span
                                                        class="hidden-xs">Cancel</span></button>
                                            <div tabindex="500" class="btn btn-primary btn-file">
                                                <i class="glyphicon glyphicon-folder-open"></i>&nbsp;
                                                <span class="hidden-xs">Выбрать изображение …</span>
                                                <input type="file" class="form-control file"
                                                       data-block="utility"
                                                       data-name="img4"
                                                       data-type="image"
                                                       data-id="0">
                                            </div>
                                        </div>
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
                                       value="{{$utility->seotitle_ru_field}}"
                                       data-name="seotitle_ru"
                                       data-type="seo"
                                       data-block="utility"
                                       data-id="0">
                            </div>
                        </div>
                        <div class="tab-pane" id="tab_seo2">
                            <div class="form-group">
                                <label>Тайтл</label>
                                <input class="form-control string"
                                       type="text" placeholder=""
                                       value="{{$utility->seotitle_kk_field}}"
                                       data-name="seotitle_kk"
                                       data-type="seo"
                                       data-block="utility"
                                       data-id="0">
                            </div>
                        </div>
                        <div class="tab-pane" id="tab_seo3">
                            <div class="form-group">
                                <label>Тайтл</label>
                                <input class="form-control string"
                                       type="text" placeholder=""
                                       value="{{$utility->seotitle_en_field}}"
                                       data-name="seotitle_en"
                                       data-type="seo"
                                       data-block="utility"
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
                               value="{{$utility->seokeywords_field}}"
                               data-name="seokeywords"
                               data-type="seo"
                               data-block="utility"
                               data-id="0">
                    </div>
                    <div class="form-group">
                        <label>Описание страницы (description)</label>
                        <textarea class="form-control text"
                                  data-name="seodescription"
                                  data-type="seo"
                                  data-block="utility"
                                  data-id="0">{{$utility->seodescription_field}}</textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection