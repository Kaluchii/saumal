@extends('back.layout')
@section('content')
    @include('back.content-top', ['title' => 'Воздействие на организм'])
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
                                           value="{{$influence->block_title_ru_field}}"
                                           data-name="block_title_ru"
                                           data-type="string"
                                           data-block="influence"
                                           data-id="0">
                                </div>
                                <div class="form-group">
                                    <label>Текст в верхнем блоке</label>
                                    <textarea class="form-control text-editor"
                                              data-name="block_text_ru"
                                              data-type="text"
                                              data-block="influence"
                                              data-id="0">{{$influence->block_text_ru_field}}</textarea>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab_2">
                                <div class="form-group">
                                    <label>Заголовок верхнего блока</label>
                                    <input class="form-control string"
                                           type="text" placeholder=""
                                           value="{{$influence->block_title_kk_field}}"
                                           data-name="block_title_kk"
                                           data-type="string"
                                           data-block="influence"
                                           data-id="0">
                                </div>
                                <div class="form-group">
                                    <label>Текст в верхнем блоке</label>
                                    <textarea class="form-control text-editor"
                                              data-name="block_text_kk"
                                              data-type="text"
                                              data-block="influence"
                                              data-id="0">{{$influence->block_text_kk_field}}</textarea>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab_3">
                                <div class="form-group">
                                    <label>Заголовок верхнего блока</label>
                                    <input class="form-control string"
                                           type="text" placeholder=""
                                           value="{{$influence->block_title_en_field}}"
                                           data-name="block_title_en"
                                           data-type="string"
                                           data-block="influence"
                                           data-id="0">
                                </div>
                                <div class="form-group">
                                    <label>Текст в верхнем блоке</label>
                                    <textarea class="form-control text-editor"
                                              data-name="block_text_en"
                                              data-type="text"
                                              data-block="influence"
                                              data-id="0">{{$influence->block_text_en_field}}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="form-group">
                            <label>Изображение (220 x 570 px)</label>
                            <div class="dropzone">
                                <div class="file-input">
                                    <div class="file-preview">
                                        <div class="input-group file-caption-main">
                                            <div class="file-preview-frame">
                                                <div class="kv-file-content">
                                                    <img src="{{$influence->block_img_field->link}}?{{$influence->block_img_field->cache_index}}" class="kv-preview-data file-preview-image" title="{{$influence->block_img_field->alt}}" alt="{{$influence->block_img_field->alt}}">
                                                </div>
                                                <div class="file-thumbnail-footer">
                                                    <div class="file-actions">
                                                        <input type="text" class="form-control alt-text" data-block="influence" data-type="images" data-id="0" data-name="alt" value="{{$influence->block_img_field->alt}}">
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-group-btn">
                                            <button type="button" tabindex="500" title="Clear selected files" class="btn btn-default fileinput-remove fileinput-remove-button"><i class="glyphicon glyphicon-trash"></i>  <span class="hidden-xs">Очистить</span></button>
                                            <button type="button" tabindex="500" title="Abort ongoing upload" class="btn btn-default hide fileinput-cancel fileinput-cancel-button"><i class="glyphicon glyphicon-ban-circle"></i>  <span class="hidden-xs">Cancel</span></button>
                                            <div tabindex="500" class="btn btn-primary btn-file">
                                                <i class="glyphicon glyphicon-folder-open"></i>&nbsp;
                                                <span class="hidden-xs">Выбрать изображение …</span>
                                                <input type="file" class="form-control file"
                                                       data-block="influence"
                                                       data-name="block_img"
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
                        <h3 class="box-title">1-ая система организма</h3>
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
                                           value="{{$influence->item_title1_ru_field}}"
                                           data-name="item_title1_ru"
                                           data-type="string"
                                           data-block="influence"
                                           data-id="0">
                                </div>
                                <div class="form-group">
                                    <label>Текст</label>
                                    <textarea class="form-control text-editor"
                                              data-name="item_text1_ru"
                                              data-type="text"
                                              data-block="influence"
                                              data-id="0">{{$influence->item_text1_ru_field}}</textarea>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab_5">
                                <div class="form-group">
                                    <label>Заголовок</label>
                                    <input class="form-control string"
                                           type="text" placeholder=""
                                           value="{{$influence->item_title1_kk_field}}"
                                           data-name="item_title1_kk"
                                           data-type="string"
                                           data-block="influence"
                                           data-id="0">
                                </div>
                                <div class="form-group">
                                    <label>Текст</label>
                                    <textarea class="form-control text-editor"
                                              data-name="item_text1_kk"
                                              data-type="text"
                                              data-block="influence"
                                              data-id="0">{{$influence->item_text1_kk_field}}</textarea>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab_6">
                                <div class="form-group">
                                    <label>Заголовок</label>
                                    <input class="form-control string"
                                           type="text" placeholder=""
                                           value="{{$influence->item_title1_en_field}}"
                                           data-name="item_title1_en"
                                           data-type="string"
                                           data-block="influence"
                                           data-id="0">
                                </div>
                                <div class="form-group">
                                    <label>Текст</label>
                                    <textarea class="form-control text-editor"
                                              data-name="item_text1_en"
                                              data-type="text"
                                              data-block="influence"
                                              data-id="0">{{$influence->item_text1_en_field}}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="form-group">
                            <label>Изображение (220 x 570 px)</label>
                            <div class="dropzone">
                                <div class="file-input">
                                    <div class="file-preview">
                                        <div class="input-group file-caption-main">
                                            <div class="file-preview-frame">
                                                <div class="kv-file-content">
                                                    <img src="{{$influence->img1_field->link}}?{{$influence->img1_field->cache_index}}" class="kv-preview-data file-preview-image" title="{{$influence->img1_field->alt}}" alt="{{$influence->img1_field->alt}}">
                                                </div>
                                                <div class="file-thumbnail-footer">
                                                    <div class="file-actions">
                                                        <input type="text" class="form-control alt-text" data-block="influence" data-type="images" data-id="0" data-name="alt" value="{{$influence->img1_field->alt}}">
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-group-btn">
                                            <button type="button" tabindex="500" title="Clear selected files" class="btn btn-default fileinput-remove fileinput-remove-button"><i class="glyphicon glyphicon-trash"></i>  <span class="hidden-xs">Очистить</span></button>
                                            <button type="button" tabindex="500" title="Abort ongoing upload" class="btn btn-default hide fileinput-cancel fileinput-cancel-button"><i class="glyphicon glyphicon-ban-circle"></i>  <span class="hidden-xs">Cancel</span></button>
                                            <div tabindex="500" class="btn btn-primary btn-file">
                                                <i class="glyphicon glyphicon-folder-open"></i>&nbsp;
                                                <span class="hidden-xs">Выбрать изображение …</span>
                                                <input type="file" class="form-control file"
                                                       data-block="influence"
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
                        <h3 class="box-title">2-ая система организма</h3>
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
                                           value="{{$influence->item_title2_ru_field}}"
                                           data-name="item_title2_ru"
                                           data-type="string"
                                           data-block="influence"
                                           data-id="0">
                                </div>
                                <div class="form-group">
                                    <label>Текст</label>
                                    <textarea class="form-control text-editor"
                                              data-name="item_text2_ru"
                                              data-type="text"
                                              data-block="influence"
                                              data-id="0">{{$influence->item_text2_ru_field}}</textarea>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab_8">
                                <div class="form-group">
                                    <label>Заголовок</label>
                                    <input class="form-control string"
                                           type="text" placeholder=""
                                           value="{{$influence->item_title2_kk_field}}"
                                           data-name="item_title2_kk"
                                           data-type="string"
                                           data-block="influence"
                                           data-id="0">
                                </div>
                                <div class="form-group">
                                    <label>Текст</label>
                                    <textarea class="form-control text-editor"
                                              data-name="item_text2_kk"
                                              data-type="text"
                                              data-block="influence"
                                              data-id="0">{{$influence->item_text2_kk_field}}</textarea>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab_9">
                                <div class="form-group">
                                    <label>Заголовок</label>
                                    <input class="form-control string"
                                           type="text" placeholder=""
                                           value="{{$influence->item_title2_en_field}}"
                                           data-name="item_title2_en"
                                           data-type="string"
                                           data-block="influence"
                                           data-id="0">
                                </div>
                                <div class="form-group">
                                    <label>Текст</label>
                                    <textarea class="form-control text-editor"
                                              data-name="item_text2_en"
                                              data-type="text"
                                              data-block="influence"
                                              data-id="0">{{$influence->item_text2_en_field}}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="form-group">
                            <label>Изображение (220 x 570 px)</label>
                            <div class="dropzone">
                                <div class="file-input">
                                    <div class="file-preview">
                                        <div class="input-group file-caption-main">
                                            <div class="file-preview-frame">
                                                <div class="kv-file-content">
                                                    <img src="{{$influence->img2_field->link}}?{{$influence->img2_field->cache_index}}" class="kv-preview-data file-preview-image" title="{{$influence->img2_field->alt}}" alt="{{$influence->img2_field->alt}}">
                                                </div>
                                                <div class="file-thumbnail-footer">
                                                    <div class="file-actions">
                                                        <input type="text" class="form-control alt-text" data-block="influence" data-type="images" data-id="0" data-name="alt" value="{{$influence->img2_field->alt}}">
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-group-btn">
                                            <button type="button" tabindex="500" title="Clear selected files" class="btn btn-default fileinput-remove fileinput-remove-button"><i class="glyphicon glyphicon-trash"></i>  <span class="hidden-xs">Очистить</span></button>
                                            <button type="button" tabindex="500" title="Abort ongoing upload" class="btn btn-default hide fileinput-cancel fileinput-cancel-button"><i class="glyphicon glyphicon-ban-circle"></i>  <span class="hidden-xs">Cancel</span></button>
                                            <div tabindex="500" class="btn btn-primary btn-file">
                                                <i class="glyphicon glyphicon-folder-open"></i>&nbsp;
                                                <span class="hidden-xs">Выбрать изображение …</span>
                                                <input type="file" class="form-control file"
                                                       data-block="influence"
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
                        <h3 class="box-title">3-я система организма</h3>
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
                                           value="{{$influence->item_title3_ru_field}}"
                                           data-name="item_title3_ru"
                                           data-type="string"
                                           data-block="influence"
                                           data-id="0">
                                </div>
                                <div class="form-group">
                                    <label>Текст</label>
                                    <textarea class="form-control text-editor"
                                              data-name="item_text3_ru"
                                              data-type="text"
                                              data-block="influence"
                                              data-id="0">{{$influence->item_text3_ru_field}}</textarea>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab_11">
                                <div class="form-group">
                                    <label>Заголовок</label>
                                    <input class="form-control string"
                                           type="text" placeholder=""
                                           value="{{$influence->item_title3_kk_field}}"
                                           data-name="item_title3_kk"
                                           data-type="string"
                                           data-block="influence"
                                           data-id="0">
                                </div>
                                <div class="form-group">
                                    <label>Текст</label>
                                    <textarea class="form-control text-editor"
                                              data-name="item_text3_kk"
                                              data-type="text"
                                              data-block="influence"
                                              data-id="0">{{$influence->item_text3_kk_field}}</textarea>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab_12">
                                <div class="form-group">
                                    <label>Заголовок</label>
                                    <input class="form-control string"
                                           type="text" placeholder=""
                                           value="{{$influence->item_title3_en_field}}"
                                           data-name="item_title3_en"
                                           data-type="string"
                                           data-block="influence"
                                           data-id="0">
                                </div>
                                <div class="form-group">
                                    <label>Текст</label>
                                    <textarea class="form-control text-editor"
                                              data-name="item_text3_en"
                                              data-type="text"
                                              data-block="influence"
                                              data-id="0">{{$influence->item_text3_en_field}}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="form-group">
                            <label>Изображение (220 x 570 px)</label>
                            <div class="dropzone">
                                <div class="file-input">
                                    <div class="file-preview">
                                        <div class="input-group file-caption-main">
                                            <div class="file-preview-frame">
                                                <div class="kv-file-content">
                                                    <img src="{{$influence->img3_field->link}}?{{$influence->img3_field->cache_index}}" class="kv-preview-data file-preview-image" title="{{$influence->img3_field->alt}}" alt="{{$influence->img3_field->alt}}">
                                                </div>
                                                <div class="file-thumbnail-footer">
                                                    <div class="file-actions">
                                                        <input type="text" class="form-control alt-text" data-block="influence" data-type="images" data-id="0" data-name="alt" value="{{$influence->img3_field->alt}}">
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-group-btn">
                                            <button type="button" tabindex="500" title="Clear selected files" class="btn btn-default fileinput-remove fileinput-remove-button"><i class="glyphicon glyphicon-trash"></i>  <span class="hidden-xs">Очистить</span></button>
                                            <button type="button" tabindex="500" title="Abort ongoing upload" class="btn btn-default hide fileinput-cancel fileinput-cancel-button"><i class="glyphicon glyphicon-ban-circle"></i>  <span class="hidden-xs">Cancel</span></button>
                                            <div tabindex="500" class="btn btn-primary btn-file">
                                                <i class="glyphicon glyphicon-folder-open"></i>&nbsp;
                                                <span class="hidden-xs">Выбрать изображение …</span>
                                                <input type="file" class="form-control file"
                                                       data-block="influence"
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
                        <h3 class="box-title">4-ая система организма</h3>
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
                                           value="{{$influence->item_title4_ru_field}}"
                                           data-name="item_title4_ru"
                                           data-type="string"
                                           data-block="influence"
                                           data-id="0">
                                </div>
                                <div class="form-group">
                                    <label>Текст</label>
                                    <textarea class="form-control text-editor"
                                              data-name="item_text4_ru"
                                              data-type="text"
                                              data-block="influence"
                                              data-id="0">{{$influence->item_text4_ru_field}}</textarea>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab_14">
                                <div class="form-group">
                                    <label>Заголовок</label>
                                    <input class="form-control string"
                                           type="text" placeholder=""
                                           value="{{$influence->item_title4_kk_field}}"
                                           data-name="item_title4_kk"
                                           data-type="string"
                                           data-block="influence"
                                           data-id="0">
                                </div>
                                <div class="form-group">
                                    <label>Текст</label>
                                    <textarea class="form-control text-editor"
                                              data-name="item_text4_kk"
                                              data-type="text"
                                              data-block="influence"
                                              data-id="0">{{$influence->item_text4_kk_field}}</textarea>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab_15">
                                <div class="form-group">
                                    <label>Заголовок</label>
                                    <input class="form-control string"
                                           type="text" placeholder=""
                                           value="{{$influence->item_title4_en_field}}"
                                           data-name="item_title4_en"
                                           data-type="string"
                                           data-block="influence"
                                           data-id="0">
                                </div>
                                <div class="form-group">
                                    <label>Текст</label>
                                    <textarea class="form-control text-editor"
                                              data-name="item_text4_en"
                                              data-type="text"
                                              data-block="influence"
                                              data-id="0">{{$influence->item_text4_en_field}}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="form-group">
                            <label>Изображение (220 x 570 px)</label>
                            <div class="dropzone">
                                <div class="file-input">
                                    <div class="file-preview">
                                        <div class="input-group file-caption-main">
                                            <div class="file-preview-frame">
                                                <div class="kv-file-content">
                                                    <img src="{{$influence->img4_field->link}}?{{$influence->img4_field->cache_index}}" class="kv-preview-data file-preview-image" title="{{$influence->img4_field->alt}}" alt="{{$influence->img4_field->alt}}">
                                                </div>
                                                <div class="file-thumbnail-footer">
                                                    <div class="file-actions">
                                                        <input type="text" class="form-control alt-text" data-block="influence" data-type="images" data-id="0" data-name="alt" value="{{$influence->img4_field->alt}}">
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-group-btn">
                                            <button type="button" tabindex="500" title="Clear selected files" class="btn btn-default fileinput-remove fileinput-remove-button"><i class="glyphicon glyphicon-trash"></i>  <span class="hidden-xs">Очистить</span></button>
                                            <button type="button" tabindex="500" title="Abort ongoing upload" class="btn btn-default hide fileinput-cancel fileinput-cancel-button"><i class="glyphicon glyphicon-ban-circle"></i>  <span class="hidden-xs">Cancel</span></button>
                                            <div tabindex="500" class="btn btn-primary btn-file">
                                                <i class="glyphicon glyphicon-folder-open"></i>&nbsp;
                                                <span class="hidden-xs">Выбрать изображение …</span>
                                                <input type="file" class="form-control file"
                                                       data-block="influence"
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


                <div class="box box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">5-ая система организма</h3>
                    </div>
                    <div class="nav-tabs-custom">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#tab_16" data-toggle="tab" aria-expanded="true">Рус</a></li>
                            <li><a href="#tab_17" data-toggle="tab" aria-expanded="false">Қаз</a></li>
                            <li><a href="#tab_18" data-toggle="tab" aria-expanded="false">Eng</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tab_16">
                                <div class="form-group">
                                    <label>Заголовок</label>
                                    <input class="form-control string"
                                           type="text" placeholder=""
                                           value="{{$influence->item_title5_ru_field}}"
                                           data-name="item_title5_ru"
                                           data-type="string"
                                           data-block="influence"
                                           data-id="0">
                                </div>
                                <div class="form-group">
                                    <label>Текст</label>
                                    <textarea class="form-control text-editor"
                                              data-name="item_text5_ru"
                                              data-type="text"
                                              data-block="influence"
                                              data-id="0">{{$influence->item_text5_ru_field}}</textarea>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab_17">
                                <div class="form-group">
                                    <label>Заголовок</label>
                                    <input class="form-control string"
                                           type="text" placeholder=""
                                           value="{{$influence->item_title5_kk_field}}"
                                           data-name="item_title5_kk"
                                           data-type="string"
                                           data-block="influence"
                                           data-id="0">
                                </div>
                                <div class="form-group">
                                    <label>Текст</label>
                                    <textarea class="form-control text-editor"
                                              data-name="item_text5_kk"
                                              data-type="text"
                                              data-block="influence"
                                              data-id="0">{{$influence->item_text5_kk_field}}</textarea>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab_18">
                                <div class="form-group">
                                    <label>Заголовок</label>
                                    <input class="form-control string"
                                           type="text" placeholder=""
                                           value="{{$influence->item_title5_en_field}}"
                                           data-name="item_title5_en"
                                           data-type="string"
                                           data-block="influence"
                                           data-id="0">
                                </div>
                                <div class="form-group">
                                    <label>Текст</label>
                                    <textarea class="form-control text-editor"
                                              data-name="item_text5_en"
                                              data-type="text"
                                              data-block="influence"
                                              data-id="0">{{$influence->item_text5_en_field}}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="form-group">
                            <label>Изображение (220 x 570 px)</label>
                            <div class="dropzone">
                                <div class="file-input">
                                    <div class="file-preview">
                                        <div class="input-group file-caption-main">
                                            <div class="file-preview-frame">
                                                <div class="kv-file-content">
                                                    <img src="{{$influence->img5_field->link}}?{{$influence->img5_field->cache_index}}" class="kv-preview-data file-preview-image" title="{{$influence->img5_field->alt}}" alt="{{$influence->img5_field->alt}}">
                                                </div>
                                                <div class="file-thumbnail-footer">
                                                    <div class="file-actions">
                                                        <input type="text" class="form-control alt-text" data-block="influence" data-type="images" data-id="0" data-name="alt" value="{{$influence->img5_field->alt}}">
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-group-btn">
                                            <button type="button" tabindex="500" title="Clear selected files" class="btn btn-default fileinput-remove fileinput-remove-button"><i class="glyphicon glyphicon-trash"></i>  <span class="hidden-xs">Очистить</span></button>
                                            <button type="button" tabindex="500" title="Abort ongoing upload" class="btn btn-default hide fileinput-cancel fileinput-cancel-button"><i class="glyphicon glyphicon-ban-circle"></i>  <span class="hidden-xs">Cancel</span></button>
                                            <div tabindex="500" class="btn btn-primary btn-file">
                                                <i class="glyphicon glyphicon-folder-open"></i>&nbsp;
                                                <span class="hidden-xs">Выбрать изображение …</span>
                                                <input type="file" class="form-control file"
                                                       data-block="influence"
                                                       data-name="img5"
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
                        <h3 class="box-title">6-ая система организма</h3>
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
                                    <label>Заголовок</label>
                                    <input class="form-control string"
                                           type="text" placeholder=""
                                           value="{{$influence->item_title6_ru_field}}"
                                           data-name="item_title6_ru"
                                           data-type="string"
                                           data-block="influence"
                                           data-id="0">
                                </div>
                                <div class="form-group">
                                    <label>Текст</label>
                                    <textarea class="form-control text-editor"
                                              data-name="item_text6_ru"
                                              data-type="text"
                                              data-block="influence"
                                              data-id="0">{{$influence->item_text6_ru_field}}</textarea>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab_20">
                                <div class="form-group">
                                    <label>Заголовок</label>
                                    <input class="form-control string"
                                           type="text" placeholder=""
                                           value="{{$influence->item_title6_kk_field}}"
                                           data-name="item_title6_kk"
                                           data-type="string"
                                           data-block="influence"
                                           data-id="0">
                                </div>
                                <div class="form-group">
                                    <label>Текст</label>
                                    <textarea class="form-control text-editor"
                                              data-name="item_text6_kk"
                                              data-type="text"
                                              data-block="influence"
                                              data-id="0">{{$influence->item_text6_kk_field}}</textarea>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab_21">
                                <div class="form-group">
                                    <label>Заголовок</label>
                                    <input class="form-control string"
                                           type="text" placeholder=""
                                           value="{{$influence->item_title6_en_field}}"
                                           data-name="item_title6_en"
                                           data-type="string"
                                           data-block="influence"
                                           data-id="0">
                                </div>
                                <div class="form-group">
                                    <label>Текст</label>
                                    <textarea class="form-control text-editor"
                                              data-name="item_text6_en"
                                              data-type="text"
                                              data-block="influence"
                                              data-id="0">{{$influence->item_text6_en_field}}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="form-group">
                            <label>Изображение (220 x 570 px)</label>
                            <div class="dropzone">
                                <div class="file-input">
                                    <div class="file-preview">
                                        <div class="input-group file-caption-main">
                                            <div class="file-preview-frame">
                                                <div class="kv-file-content">
                                                    <img src="{{$influence->img6_field->link}}?{{$influence->img6_field->cache_index}}" class="kv-preview-data file-preview-image" title="{{$influence->img6_field->alt}}" alt="{{$influence->img6_field->alt}}">
                                                </div>
                                                <div class="file-thumbnail-footer">
                                                    <div class="file-actions">
                                                        <input type="text" class="form-control alt-text" data-block="influence" data-type="images" data-id="0" data-name="alt" value="{{$influence->img6_field->alt}}">
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-group-btn">
                                            <button type="button" tabindex="500" title="Clear selected files" class="btn btn-default fileinput-remove fileinput-remove-button"><i class="glyphicon glyphicon-trash"></i>  <span class="hidden-xs">Очистить</span></button>
                                            <button type="button" tabindex="500" title="Abort ongoing upload" class="btn btn-default hide fileinput-cancel fileinput-cancel-button"><i class="glyphicon glyphicon-ban-circle"></i>  <span class="hidden-xs">Cancel</span></button>
                                            <div tabindex="500" class="btn btn-primary btn-file">
                                                <i class="glyphicon glyphicon-folder-open"></i>&nbsp;
                                                <span class="hidden-xs">Выбрать изображение …</span>
                                                <input type="file" class="form-control file"
                                                       data-block="influence"
                                                       data-name="img6"
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
                                       value="{{$influence->seotitle_ru_field}}"
                                       data-name="seotitle_ru"
                                       data-type="seo"
                                       data-block="influence"
                                       data-id="0">
                            </div>
                        </div>
                        <div class="tab-pane" id="tab_seo2">
                            <div class="form-group">
                                <label>Тайтл</label>
                                <input class="form-control string"
                                       type="text" placeholder=""
                                       value="{{$influence->seotitle_kk_field}}"
                                       data-name="seotitle_kk"
                                       data-type="seo"
                                       data-block="influence"
                                       data-id="0">
                            </div>
                        </div>
                        <div class="tab-pane" id="tab_seo3">
                            <div class="form-group">
                                <label>Тайтл</label>
                                <input class="form-control string"
                                       type="text" placeholder=""
                                       value="{{$influence->seotitle_en_field}}"
                                       data-name="seotitle_en"
                                       data-type="seo"
                                       data-block="influence"
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
                               value="{{$influence->seokeywords_field}}"
                               data-name="seokeywords"
                               data-type="seo"
                               data-block="influence"
                               data-id="0">
                    </div>
                    <div class="form-group">
                        <label>Описание страницы (description)</label>
                        <textarea class="form-control text"
                                  data-name="seodescription"
                                  data-type="seo"
                                  data-block="influence"
                                  data-id="0">{{$influence->seodescription_field}}</textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection