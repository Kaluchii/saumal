@extends('back.layout')
@section('content')
    @include('back.content-top', ['title' => 'Миссия компании'])
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
                                           value="{{$mission->block_title_ru_field}}"
                                           data-name="block_title_ru"
                                           data-type="string"
                                           data-block="mission"
                                           data-id="0">
                                </div>
                                <div class="form-group">
                                    <label>Текст</label>
                                    <textarea class="form-control text"
                                              data-name="block_text_ru"
                                              data-type="text"
                                              data-block="mission"
                                              data-id="0">{{$mission->block_text_ru_field}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label>Имя учредителя</label>
                                    <input class="form-control string"
                                           type="text" placeholder=""
                                           value="{{$mission->name_ru_field}}"
                                           data-name="name_ru"
                                           data-type="string"
                                           data-block="mission"
                                           data-id="0">
                                </div>
                                <div class="form-group">
                                    <label>Должность</label>
                                    <input class="form-control string"
                                           type="text" placeholder=""
                                           value="{{$mission->under_name_ru_field}}"
                                           data-name="under_name_ru"
                                           data-type="string"
                                           data-block="mission"
                                           data-id="0">
                                </div>
                            </div>
                            <div class="tab-pane" id="tab_5">
                                <div class="form-group">
                                    <label>Заголовок</label>
                                    <input class="form-control string"
                                           type="text" placeholder=""
                                           value="{{$mission->block_title_kk_field}}"
                                           data-name="block_title_kk"
                                           data-type="string"
                                           data-block="mission"
                                           data-id="0">
                                </div>
                                <div class="form-group">
                                    <label>Текст</label>
                                    <textarea class="form-control text"
                                              data-name="block_text_kk"
                                              data-type="text"
                                              data-block="mission"
                                              data-id="0">{{$mission->block_text_kk_field}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label>Имя учредителя</label>
                                    <input class="form-control string"
                                           type="text" placeholder=""
                                           value="{{$mission->name_kk_field}}"
                                           data-name="name_kk"
                                           data-type="string"
                                           data-block="mission"
                                           data-id="0">
                                </div>
                                <div class="form-group">
                                    <label>Должность</label>
                                    <input class="form-control string"
                                           type="text" placeholder=""
                                           value="{{$mission->under_name_kk_field}}"
                                           data-name="under_name_kk"
                                           data-type="string"
                                           data-block="mission"
                                           data-id="0">
                                </div>
                            </div>
                            <div class="tab-pane" id="tab_6">
                                <div class="form-group">
                                    <label>Заголовок</label>
                                    <input class="form-control string"
                                           type="text" placeholder=""
                                           value="{{$mission->block_title_en_field}}"
                                           data-name="block_title_en"
                                           data-type="string"
                                           data-block="mission"
                                           data-id="0">
                                </div>
                                <div class="form-group">
                                    <label>Текст</label>
                                    <textarea class="form-control text"
                                              data-name="block_text_en"
                                              data-type="text"
                                              data-block="mission"
                                              data-id="0">{{$mission->block_text_en_field}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label>Имя учредителя</label>
                                    <input class="form-control string"
                                           type="text" placeholder=""
                                           value="{{$mission->name_en_field}}"
                                           data-name="name_en"
                                           data-type="string"
                                           data-block="mission"
                                           data-id="0">
                                </div>
                                <div class="form-group">
                                    <label>Должность</label>
                                    <input class="form-control string"
                                           type="text" placeholder=""
                                           value="{{$mission->under_name_en_field}}"
                                           data-name="under_name_en"
                                           data-type="string"
                                           data-block="mission"
                                           data-id="0">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="form-group">
                            <label>Фото учредителя (255 x 255 px)</label>
                            <div class="dropzone">
                                <div class="file-input">
                                    <div class="file-preview">
                                        <div class="input-group file-caption-main">
                                            <div class="file-preview-frame">
                                                <div class="kv-file-content">
                                                    <img src="{{$mission->img_field->link}}?{{$mission->img_field->cache_index}}"
                                                         class="kv-preview-data file-preview-image"
                                                         title="{{$mission->img_field->alt}}" alt="{{$mission->img_field->alt}}">
                                                </div>
                                                <div class="file-thumbnail-footer">
                                                    <div class="file-actions">
                                                        <input type="text" class="form-control alt-text" data-block="mission"
                                                               data-type="images" data-id="0" data-name="alt"
                                                               value="{{$mission->img_field->alt}}">
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
                                                       data-block="mission"
                                                       data-name="img"
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
                                       value="{{$mission->seotitle_ru_field}}"
                                       data-name="seotitle_ru"
                                       data-type="seo"
                                       data-block="mission"
                                       data-id="0">
                            </div>
                        </div>
                        <div class="tab-pane" id="tab_seo2">
                            <div class="form-group">
                                <label>Тайтл</label>
                                <input class="form-control string"
                                       type="text" placeholder=""
                                       value="{{$mission->seotitle_kk_field}}"
                                       data-name="seotitle_kk"
                                       data-type="seo"
                                       data-block="mission"
                                       data-id="0">
                            </div>
                        </div>
                        <div class="tab-pane" id="tab_seo3">
                            <div class="form-group">
                                <label>Тайтл</label>
                                <input class="form-control string"
                                       type="text" placeholder=""
                                       value="{{$mission->seotitle_en_field}}"
                                       data-name="seotitle_en"
                                       data-type="seo"
                                       data-block="mission"
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
                               value="{{$mission->seokeywords_field}}"
                               data-name="seokeywords"
                               data-type="seo"
                               data-block="mission"
                               data-id="0">
                    </div>
                    <div class="form-group">
                        <label>Описание страницы (description)</label>
                        <textarea class="form-control text"
                                  data-name="seodescription"
                                  data-type="seo"
                                  data-block="mission"
                                  data-id="0">{{$mission->seodescription_field}}</textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection