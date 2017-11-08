<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Слайд {{$item->sorter_field}}</h3>
        <button type="submit" class="btn btn-primary pull-right remove-flat-item" data-id="{{$item->id_field}}"
                data-block="slide">Удалить</button>
    </div>
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#tab_{{$item->id_field.$item->sorter_field.'1'}}" data-toggle="tab" aria-expanded="true">Рус</a></li>
                <li><a href="#tab_{{$item->id_field.$item->sorter_field.'2'}}" data-toggle="tab" aria-expanded="false">Қаз</a></li>
                <li><a href="#tab_{{$item->id_field.$item->sorter_field.'3'}}" data-toggle="tab" aria-expanded="false">Eng</a></li>
            </ul>
            <div class="tab-content">

                <div class="tab-pane active" id="tab_{{$item->id_field.$item->sorter_field.'1'}}">
                    <div class="form-group">
                        <label>Заголовок</label>
                        <input class="form-control string"
                               type="text" placeholder=""
                               value="{{$item->slide_title_ru_field}}"
                               data-name="slide_title_ru"
                               data-type="string"
                               data-block="slide"
                               data-id="{{$item->id_field}}">
                    </div>
                    <div class="form-group">
                        <label>Текст под заголовком</label>
                        <textarea class="form-control text"
                                  data-name="slide_text_ru"
                                  data-type="text"
                                  data-block="slide"
                                  data-id="{{$item->id_field}}">{{$item->slide_text_ru_field}}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Текст на кнопке</label>
                        <input class="form-control string"
                               type="text" placeholder=""
                               value="{{$item->btn_text_ru_field}}"
                               data-name="btn_text_ru"
                               data-type="string"
                               data-block="slide"
                               data-id="{{$item->id_field}}">
                    </div>
                </div>

                <div class="tab-pane" id="tab_{{$item->id_field.$item->sorter_field.'2'}}">
                    <div class="form-group">
                        <label>Заголовок</label>
                        <input class="form-control string"
                               type="text" placeholder=""
                               value="{{$item->slide_title_kk_field}}"
                               data-name="slide_title_kk"
                               data-type="string"
                               data-block="slide"
                               data-id="{{$item->id_field}}">
                    </div>
                    <div class="form-group">
                        <label>Текст под заголовком</label>
                        <textarea class="form-control text"
                                  data-name="slide_text_kk"
                                  data-type="text"
                                  data-block="slide"
                                  data-id="{{$item->id_field}}">{{$item->slide_text_kk_field}}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Текст на кнопке</label>
                        <input class="form-control string"
                               type="text" placeholder=""
                               value="{{$item->btn_text_kk_field}}"
                               data-name="btn_text_kk"
                               data-type="string"
                               data-block="slide"
                               data-id="{{$item->id_field}}">
                    </div>
                </div>

                <div class="tab-pane" id="tab_{{$item->id_field.$item->sorter_field.'3'}}">
                    <div class="form-group">
                        <label>Заголовок</label>
                        <input class="form-control string"
                               type="text" placeholder=""
                               value="{{$item->slide_title_en_field}}"
                               data-name="slide_title_en"
                               data-type="string"
                               data-block="slide"
                               data-id="{{$item->id_field}}">
                    </div>
                    <div class="form-group">
                        <label>Текст под заголовком</label>
                        <textarea class="form-control text"
                                  data-name="slide_text_en"
                                  data-type="text"
                                  data-block="slide"
                                  data-id="{{$item->id_field}}">{{$item->slide_text_en_field}}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Текст на кнопке</label>
                        <input class="form-control string"
                               type="text" placeholder=""
                               value="{{$item->btn_text_en_field}}"
                               data-name="btn_text_en"
                               data-type="string"
                               data-block="slide"
                               data-id="{{$item->id_field}}">
                    </div>
                </div>
            </div>
        </div>

    <div class="box-body">
        <div class="form-group">
            <label>Ссылка на страницу</label>
            <input class="form-control string"
                   type="text" placeholder=""
                   value="{{$item->btn_link_field}}"
                   data-name="btn_link"
                   data-type="string"
                   data-block="slide"
                   data-id="{{$item->id_field}}">
        </div>

        <div class="form-group col-md-6">
            <label>Десктопное изображение (1480 x 596 px)</label>
            <div class="dropzone">
                <div class="file-input">
                    <div class="file-preview">
                        <div class="input-group file-caption-main">
                            <div class="file-preview-frame">
                                <div class="kv-file-content">
                                    <img src="{{$item->slide_field->link}}?{{$item->slide_field->cache_index}}" class="kv-preview-data file-preview-image" title="{{$item->slide_field->alt}}" alt="{{$item->slide_field->alt}}">
                                </div>
                                <div class="file-thumbnail-footer">
                                    <div class="file-actions">
                                        <input type="text" class="form-control alt-text" data-block="slide" data-type="images" data-id="{{$item->id_field}}" data-name="alt" value="{{$item->slide_field->alt}}">
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
                                       data-block="slide"
                                       data-name="slide"
                                       data-type="image"
                                       data-id="{{$item->id_field}}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="form-group col-md-6">
            <label>Мобильное изображение (320 x 660 px)</label>
            <div class="dropzone">
                <div class="file-input">
                    <div class="file-preview">
                        <div class="input-group file-caption-main">
                            <div class="file-preview-frame">
                                <div class="kv-file-content">
                                    <img src="{{$item->mob_slide_field->link}}?{{$item->mob_slide_field->cache_index}}" class="kv-preview-data file-preview-image" title="{{$item->mob_slide_field->alt}}" alt="{{$item->mob_slide_field->alt}}">
                                </div>
                                <div class="file-thumbnail-footer">
                                    <div class="file-actions">
                                        <input type="text" class="form-control alt-text" data-block="slide" data-type="images" data-id="{{$item->id_field}}" data-name="alt" value="{{$item->mob_slide_field->alt}}">
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
                                       data-block="slide"
                                       data-name="mob_slide"
                                       data-type="image"
                                       data-id="{{$item->id_field}}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xs-1 no-padding">
            <div class="form-group">
                <label>Позиция</label>
                <input type="number" class="form-control string"
                       data-id="{{$item->id_field}}"
                       data-block="slide"
                       data-name="sorter"
                       value="{{$item->sorter_field}}">
            </div>
        </div>
    </div>
</div>