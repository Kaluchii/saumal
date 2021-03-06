@extends('back.layout')
@section('content')
    @include('back.content-top', ['title' => 'Кому полезен'])
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
                            <label>Заголовок блока</label>
                            <input class="form-control string"
                                   type="text" placeholder=""
                                   value="{{$home_utility->block_title_ru_field}}"
                                   data-name="block_title_ru"
                                   data-type="string"
                                   data-block="home_utility"
                                   data-id="0">
                        </div>
                </div>
                <div class="tab-pane" id="tab_2">
                        <div class="form-group">
                            <label>Заголовок блока</label>
                            <input class="form-control string"
                                   type="text" placeholder=""
                                   value="{{$home_utility->block_title_kk_field}}"
                                   data-name="block_title_kk"
                                   data-type="string"
                                   data-block="home_utility"
                                   data-id="0">
                        </div>
                </div>
                <div class="tab-pane" id="tab_3">
                        <div class="form-group">
                            <label>Заголовок блока</label>
                            <input class="form-control string"
                                   type="text" placeholder=""
                                   value="{{$home_utility->block_title_en_field}}"
                                   data-name="block_title_en"
                                   data-type="string"
                                   data-block="home_utility"
                                   data-id="0">
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
                                   value="{{$home_utility->item_title1_ru_field}}"
                                   data-name="item_title1_ru"
                                   data-type="string"
                                   data-block="home_utility"
                                   data-id="0">
                        </div>
                        <div class="form-group">
                            <label>Текст</label>
                            <textarea class="form-control text" data-reg="true"
                                      data-name="item_text1_ru"
                                      data-type="text"
                                      data-block="home_utility"
                                      data-id="0">{{$home_utility->item_text1_ru_field}}</textarea>
                        </div>
                </div>
                <div class="tab-pane" id="tab_5">
                        <div class="form-group">
                            <label>Заголовок</label>
                            <input class="form-control string"
                                   type="text" placeholder=""
                                   value="{{$home_utility->item_title1_kk_field}}"
                                   data-name="item_title1_kk"
                                   data-type="string"
                                   data-block="home_utility"
                                   data-id="0">
                        </div>
                        <div class="form-group">
                            <label>Текст</label>
                            <textarea class="form-control text" data-reg="true"
                                      data-name="item_text1_kk"
                                      data-type="text"
                                      data-block="home_utility"
                                      data-id="0">{{$home_utility->item_text1_kk_field}}</textarea>
                        </div>
                </div>
                <div class="tab-pane" id="tab_6">
                        <div class="form-group">
                            <label>Заголовок</label>
                            <input class="form-control string"
                                   type="text" placeholder=""
                                   value="{{$home_utility->item_title1_en_field}}"
                                   data-name="item_title1_en"
                                   data-type="string"
                                   data-block="home_utility"
                                   data-id="0">
                        </div>
                        <div class="form-group">
                            <label>Текст</label>
                            <textarea class="form-control text" data-reg="true"
                                      data-name="item_text1_en"
                                      data-type="text"
                                      data-block="home_utility"
                                      data-id="0">{{$home_utility->item_text1_en_field}}</textarea>
                        </div>
                </div>
            </div>
        </div>
        <div class="box-body">
            <div class="form-group">
                <label>Изображение (540 x 293 px)</label>
                <div class="dropzone">
                    <div class="file-input">
                        <div class="file-preview">
                            <div class="input-group file-caption-main">
                                <div class="file-preview-frame">
                                    <div class="kv-file-content">
                                        <img src="{{$home_utility->img1_field->link}}?{{$home_utility->img1_field->cache_index}}" class="kv-preview-data file-preview-image" title="{{$home_utility->img1_field->alt}}" alt="{{$home_utility->img1_field->alt}}">
                                    </div>
                                    <div class="file-thumbnail-footer">
                                        <div class="file-actions">
                                            <input type="text" class="form-control alt-text" data-block="home_utility" data-type="images" data-id="0" data-name="alt" value="{{$home_utility->img1_field->alt}}">
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
                                           data-block="home_utility"
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
                                   value="{{$home_utility->item_title2_ru_field}}"
                                   data-name="item_title2_ru"
                                   data-type="string"
                                   data-block="home_utility"
                                   data-id="0">
                        </div>
                        <div class="form-group">
                            <label>Текст</label>
                            <textarea class="form-control text" data-reg="true"
                                      data-name="item_text2_ru"
                                      data-type="text"
                                      data-block="home_utility"
                                      data-id="0">{{$home_utility->item_text2_ru_field}}</textarea>
                        </div>
                </div>
                <div class="tab-pane" id="tab_8">
                        <div class="form-group">
                            <label>Заголовок</label>
                            <input class="form-control string"
                                   type="text" placeholder=""
                                   value="{{$home_utility->item_title2_kk_field}}"
                                   data-name="item_title2_kk"
                                   data-type="string"
                                   data-block="home_utility"
                                   data-id="0">
                        </div>
                        <div class="form-group">
                            <label>Текст</label>
                            <textarea class="form-control text" data-reg="true"
                                      data-name="item_text2_kk"
                                      data-type="text"
                                      data-block="home_utility"
                                      data-id="0">{{$home_utility->item_text2_kk_field}}</textarea>
                        </div>
                </div>
                <div class="tab-pane" id="tab_9">
                        <div class="form-group">
                            <label>Заголовок</label>
                            <input class="form-control string"
                                   type="text" placeholder=""
                                   value="{{$home_utility->item_title2_en_field}}"
                                   data-name="item_title2_en"
                                   data-type="string"
                                   data-block="home_utility"
                                   data-id="0">
                        </div>
                        <div class="form-group">
                            <label>Текст</label>
                            <textarea class="form-control text" data-reg="true"
                                      data-name="item_text2_en"
                                      data-type="text"
                                      data-block="home_utility"
                                      data-id="0">{{$home_utility->item_text2_en_field}}</textarea>
                        </div>
                </div>
            </div>
        </div>
        <div class="box-body">
            <div class="form-group">
                <label>Изображение (540 x 293 px)</label>
                <div class="dropzone">
                    <div class="file-input">
                        <div class="file-preview">
                            <div class="input-group file-caption-main">
                                <div class="file-preview-frame">
                                    <div class="kv-file-content">
                                        <img src="{{$home_utility->img2_field->link}}?{{$home_utility->img2_field->cache_index}}" class="kv-preview-data file-preview-image" title="{{$home_utility->img2_field->alt}}" alt="{{$home_utility->img2_field->alt}}">
                                    </div>
                                    <div class="file-thumbnail-footer">
                                        <div class="file-actions">
                                            <input type="text" class="form-control alt-text" data-block="home_utility" data-type="images" data-id="0" data-name="alt" value="{{$home_utility->img2_field->alt}}">
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
                                           data-block="home_utility"
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
                                   value="{{$home_utility->item_title3_ru_field}}"
                                   data-name="item_title3_ru"
                                   data-type="string"
                                   data-block="home_utility"
                                   data-id="0">
                        </div>
                        <div class="form-group">
                            <label>Текст</label>
                            <textarea class="form-control text" data-reg="true"
                                      data-name="item_text3_ru"
                                      data-type="text"
                                      data-block="home_utility"
                                      data-id="0">{{$home_utility->item_text3_ru_field}}</textarea>
                        </div>
                </div>
                <div class="tab-pane" id="tab_11">
                        <div class="form-group">
                            <label>Заголовок</label>
                            <input class="form-control string"
                                   type="text" placeholder=""
                                   value="{{$home_utility->item_title3_kk_field}}"
                                   data-name="item_title3_kk"
                                   data-type="string"
                                   data-block="home_utility"
                                   data-id="0">
                        </div>
                        <div class="form-group">
                            <label>Текст</label>
                            <textarea class="form-control text" data-reg="true"
                                      data-name="item_text3_kk"
                                      data-type="text"
                                      data-block="home_utility"
                                      data-id="0">{{$home_utility->item_text3_kk_field}}</textarea>
                        </div>
                </div>
                <div class="tab-pane" id="tab_12">
                        <div class="form-group">
                            <label>Заголовок</label>
                            <input class="form-control string"
                                   type="text" placeholder=""
                                   value="{{$home_utility->item_title3_en_field}}"
                                   data-name="item_title3_en"
                                   data-type="string"
                                   data-block="home_utility"
                                   data-id="0">
                        </div>
                        <div class="form-group">
                            <label>Текст</label>
                            <textarea class="form-control text" data-reg="true"
                                      data-name="item_text3_en"
                                      data-type="text"
                                      data-block="home_utility"
                                      data-id="0">{{$home_utility->item_text3_en_field}}</textarea>
                        </div>
                </div>
            </div>
        </div>
        <div class="box-body">
            <div class="form-group">
                <label>Изображение (540 x 293 px)</label>
                <div class="dropzone">
                    <div class="file-input">
                        <div class="file-preview">
                            <div class="input-group file-caption-main">
                                <div class="file-preview-frame">
                                    <div class="kv-file-content">
                                        <img src="{{$home_utility->img3_field->link}}?{{$home_utility->img3_field->cache_index}}" class="kv-preview-data file-preview-image" title="{{$home_utility->img3_field->alt}}" alt="{{$home_utility->img3_field->alt}}">
                                    </div>
                                    <div class="file-thumbnail-footer">
                                        <div class="file-actions">
                                            <input type="text" class="form-control alt-text" data-block="home_utility" data-type="images" data-id="0" data-name="alt" value="{{$home_utility->img3_field->alt}}">
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
                                           data-block="home_utility"
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
                                   value="{{$home_utility->item_title4_ru_field}}"
                                   data-name="item_title4_ru"
                                   data-type="string"
                                   data-block="home_utility"
                                   data-id="0">
                        </div>
                        <div class="form-group">
                            <label>Текст</label>
                            <textarea class="form-control text" data-reg="true"
                                      data-name="item_text4_ru"
                                      data-type="text"
                                      data-block="home_utility"
                                      data-id="0">{{$home_utility->item_text4_ru_field}}</textarea>
                        </div>
                </div>
                <div class="tab-pane" id="tab_14">
                    <div class="form-group">
                        <label>Заголовок</label>
                        <input class="form-control string"
                               type="text" placeholder=""
                               value="{{$home_utility->item_title4_kk_field}}"
                               data-name="item_title4_kk"
                               data-type="string"
                               data-block="home_utility"
                               data-id="0">
                    </div>
                    <div class="form-group">
                        <label>Текст</label>
                        <textarea class="form-control text" data-reg="true"
                                  data-name="item_text4_kk"
                                  data-type="text"
                                  data-block="home_utility"
                                  data-id="0">{{$home_utility->item_text4_kk_field}}</textarea>
                    </div>
                </div>
                <div class="tab-pane" id="tab_15">
                        <div class="form-group">
                            <label>Заголовок</label>
                            <input class="form-control string"
                                   type="text" placeholder=""
                                   value="{{$home_utility->item_title4_en_field}}"
                                   data-name="item_title4_en"
                                   data-type="string"
                                   data-block="home_utility"
                                   data-id="0">
                        </div>
                        <div class="form-group">
                            <label>Текст</label>
                            <textarea class="form-control text" data-reg="true"
                                      data-name="item_text4_en"
                                      data-type="text"
                                      data-block="home_utility"
                                      data-id="0">{{$home_utility->item_text4_en_field}}</textarea>
                        </div>
                </div>
            </div>
        </div>
        <div class="box-body">
            <div class="form-group">
                <label>Изображение (540 x 293 px)</label>
                <div class="dropzone">
                    <div class="file-input">
                        <div class="file-preview">
                            <div class="input-group file-caption-main">
                                <div class="file-preview-frame">
                                    <div class="kv-file-content">
                                        <img src="{{$home_utility->img4_field->link}}?{{$home_utility->img4_field->cache_index}}" class="kv-preview-data file-preview-image" title="{{$home_utility->img4_field->alt}}" alt="{{$home_utility->img4_field->alt}}">
                                    </div>
                                    <div class="file-thumbnail-footer">
                                        <div class="file-actions">
                                            <input type="text" class="form-control alt-text" data-block="home_utility" data-type="images" data-id="0" data-name="alt" value="{{$home_utility->img4_field->alt}}">
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
                                           data-block="home_utility"
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
@endsection