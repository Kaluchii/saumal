<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Этап {{$item->sorter_field}}</h3>
        <button type="submit" class="btn btn-primary pull-right remove-flat-item" data-id="{{$item->id_field}}"
                data-block="home_stages">Удалить</button>
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
                    <label>Заголовок {{$item->sorter_field}}-го этапа</label>
                    <input class="form-control string"
                           type="text" placeholder=""
                           value="{{$item->stage_title_ru_field}}"
                           data-name="stage_title_ru"
                           data-type="string"
                           data-block="home_stages"
                           data-id="{{$item->id_field}}">
                </div>
                <div class="form-group">
                    <label>Заголовок 1-го подэтапа</label>
                    <input class="form-control string"
                           type="text" placeholder=""
                           value="{{$item->part1_ru_field}}"
                           data-name="part1_ru"
                           data-type="string"
                           data-block="home_stages"
                           data-id="{{$item->id_field}}">
                </div>
                <div class="form-group">
                    <label>Текст 1-го подэтапа</label>
                    <textarea class="form-control text"
                              data-name="part1_text_ru"
                              data-type="text"
                              data-block="home_stages"
                              data-id="{{$item->id_field}}">{{$item->part1_text_ru_field}}</textarea>
                </div>
                <div class="form-group">
                    <label>Заголовок 2-го подэтапа</label>
                    <input class="form-control string"
                           type="text" placeholder=""
                           value="{{$item->part2_ru_field}}"
                           data-name="part2_ru"
                           data-type="string"
                           data-block="home_stages"
                           data-id="{{$item->id_field}}">
                </div>
                <div class="form-group">
                    <label>Текст 2-го подэтапа</label>
                    <textarea class="form-control text"
                              data-name="part2_text_ru"
                              data-type="text"
                              data-block="home_stages"
                              data-id="{{$item->id_field}}">{{$item->part2_text_ru_field}}</textarea>
                </div>
                <div class="form-group">
                    <label>Завершающий строку факт</label>
                    <textarea class="form-control text"
                              data-name="fact_ru"
                              data-type="text"
                              data-block="home_stages"
                              data-id="{{$item->id_field}}">{{$item->fact_ru_field}}</textarea>
                </div>
            </div>

            <div class="tab-pane" id="tab_{{$item->id_field.$item->sorter_field.'2'}}">
                <div class="form-group">
                    <label>Заголовок {{$item->sorter_field}}-го этапа</label>
                    <input class="form-control string"
                           type="text" placeholder=""
                           value="{{$item->stage_title_kk_field}}"
                           data-name="stage_title_kk"
                           data-type="string"
                           data-block="home_stages"
                           data-id="{{$item->id_field}}">
                </div>
                <div class="form-group">
                    <label>Заголовок 1-го подэтапа</label>
                    <input class="form-control string"
                           type="text" placeholder=""
                           value="{{$item->part1_kk_field}}"
                           data-name="part1_kk"
                           data-type="string"
                           data-block="home_stages"
                           data-id="{{$item->id_field}}">
                </div>
                <div class="form-group">
                    <label>Текст 1-го подэтапа</label>
                    <textarea class="form-control text"
                              data-name="part1_text_kk"
                              data-type="text"
                              data-block="home_stages"
                              data-id="{{$item->id_field}}">{{$item->part1_text_kk_field}}</textarea>
                </div>
                <div class="form-group">
                    <label>Заголовок 2-го подэтапа</label>
                    <input class="form-control string"
                           type="text" placeholder=""
                           value="{{$item->part2_kk_field}}"
                           data-name="part2_kk"
                           data-type="string"
                           data-block="home_stages"
                           data-id="{{$item->id_field}}">
                </div>
                <div class="form-group">
                    <label>Текст 2-го подэтапа</label>
                    <textarea class="form-control text"
                              data-name="part2_text_kk"
                              data-type="text"
                              data-block="home_stages"
                              data-id="{{$item->id_field}}">{{$item->part2_text_kk_field}}</textarea>
                </div>
                <div class="form-group">
                    <label>Завершающий строку факт</label>
                    <textarea class="form-control text"
                              data-name="fact_kk"
                              data-type="text"
                              data-block="home_stages"
                              data-id="{{$item->id_field}}">{{$item->fact_kk_field}}</textarea>
                </div>
            </div>

            <div class="tab-pane" id="tab_{{$item->id_field.$item->sorter_field.'3'}}">
                <div class="form-group">
                    <label>Заголовок {{$item->sorter_field}}-го этапа</label>
                    <input class="form-control string"
                           type="text" placeholder=""
                           value="{{$item->stage_title_en_field}}"
                           data-name="stage_title_en"
                           data-type="string"
                           data-block="home_stages"
                           data-id="{{$item->id_field}}">
                </div>
                <div class="form-group">
                    <label>Заголовок 1-го подэтапа</label>
                    <input class="form-control string"
                           type="text" placeholder=""
                           value="{{$item->part1_en_field}}"
                           data-name="part1_en"
                           data-type="string"
                           data-block="home_stages"
                           data-id="{{$item->id_field}}">
                </div>
                <div class="form-group">
                    <label>Текст 1-го подэтапа</label>
                    <textarea class="form-control text"
                              data-name="part1_text_en"
                              data-type="text"
                              data-block="home_stages"
                              data-id="{{$item->id_field}}">{{$item->part1_text_en_field}}</textarea>
                </div>
                <div class="form-group">
                    <label>Заголовок 2-го подэтапа</label>
                    <input class="form-control string"
                           type="text" placeholder=""
                           value="{{$item->part2_en_field}}"
                           data-name="part2_en"
                           data-type="string"
                           data-block="home_stages"
                           data-id="{{$item->id_field}}">
                </div>
                <div class="form-group">
                    <label>Текст 2-го подэтапа</label>
                    <textarea class="form-control text"
                              data-name="part2_text_en"
                              data-type="text"
                              data-block="home_stages"
                              data-id="{{$item->id_field}}">{{$item->part2_text_en_field}}</textarea>
                </div>
                <div class="form-group">
                    <label>Завершающий строку факт</label>
                    <textarea class="form-control text"
                              data-name="fact_en"
                              data-type="text"
                              data-block="home_stages"
                              data-id="{{$item->id_field}}">{{$item->fact_en_field}}</textarea>
                </div>
            </div>
        </div>
    </div>

    <div class="box-body">
        <div class="form-group">
            <label>Изображение (120 x 113 px)</label>
            <div class="dropzone">
                <div class="file-input">
                    <div class="file-preview">
                        <div class="input-group file-caption-main">
                            <div class="file-preview-frame">
                                <div class="kv-file-content">
                                    <img src="{{$item->img_field->link}}?{{$item->img_field->cache_index}}" class="kv-preview-data file-preview-image" title="{{$item->img_field->alt}}" alt="{{$item->img_field->alt}}">
                                </div>
                                <div class="file-thumbnail-footer">
                                    <div class="file-actions">
                                        <input type="text" class="form-control alt-text" data-block="home_stages" data-type="images" data-id="{{$item->id_field}}" data-name="alt" value="{{$item->img_field->alt}}">
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
                                       data-block="home_stages"
                                       data-name="img"
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
                       data-block="home_stages"
                       data-name="sorter"
                       value="{{$item->sorter_field}}">
            </div>
        </div>
    </div>
</div>