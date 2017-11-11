@extends('back.layout')
@section('content')

@include('back.content-top', ['title' => 'Контакты'])
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
                                <label>Текст на вкладке "Адрес производства"</label>
                                <textarea class="form-control text" data-reg="true"
                                          data-name="prod_text_ru"
                                          data-type="text"
                                          data-block="contacts"
                                          data-id="0">{{$contacts->prod_text_ru_field}}</textarea>
                            </div>
                            <div class="form-group">
                                <label>Текст на вкладке "Дистрибьюторы"</label>
                                <textarea class="form-control text" data-reg="true"
                                          data-name="distr_text_ru"
                                          data-type="text"
                                          data-block="contacts"
                                          data-id="0">{{$contacts->distr_text_ru_field}}</textarea>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab_2">
                            <div class="form-group">
                                <label>Текст на вкладке "Адрес производства"</label>
                                <textarea class="form-control text" data-reg="true"
                                          data-name="prod_text_kk"
                                          data-type="text"
                                          data-block="contacts"
                                          data-id="0">{{$contacts->prod_text_kk_field}}</textarea>
                            </div>
                            <div class="form-group">
                                <label>Текст на вкладке "Дистрибьюторы"</label>
                                <textarea class="form-control text" data-reg="true"
                                          data-name="distr_text_kk"
                                          data-type="text"
                                          data-block="contacts"
                                          data-id="0">{{$contacts->distr_text_kk_field}}</textarea>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab_3">
                            <div class="form-group">
                                <label>Текст на вкладке "Адрес производства"</label>
                                <textarea class="form-control text" data-reg="true"
                                          data-name="prod_text_en"
                                          data-type="text"
                                          data-block="contacts"
                                          data-id="0">{{$contacts->prod_text_en_field}}</textarea>
                            </div>
                            <div class="form-group">
                                <label>Текст на вкладке "Дистрибьюторы"</label>
                                <textarea class="form-control text" data-reg="true"
                                          data-name="distr_text_en"
                                          data-type="text"
                                          data-block="contacts"
                                          data-id="0">{{$contacts->distr_text_en_field}}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-xs-12">
                    <div class="box table-widget">
                        <div class="box-header with-border">
                            <h3 class="box-title">
                                Список городов
                            </h3>
                            <button type="button" data-parent="0" class="btn btn-primary pull-right add-group-item">Добавить</button>
                            <div class="col-xs-5 pull-right">
                                <input type="text" class="form-control add-item"
                                       data-name="item_title_ru"
                                       data-block="cities"
                                       placeholder="Название элемента"
                                >
                            </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table class="table table-bordered table-hover dataTable table-widget-selector" role="grid"
                                   aria-describedby="example2_info"
                                   data-block="contacts">
                                <thead>
                                <tr role="row">
                                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                        colspan="1" aria-label="">ID</th>
                                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                        colspan="1" aria-label="">Название</th>
                                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                        colspan="1" aria-label="">Дата редактирования</th>
                                    {{--<th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                        colspan="1" aria-label="">Статус публикации</th>--}}
                                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                        colspan="1" aria-label="">Порядок выдачи</th>
                                    <th  tabindex="0"  rowspan="1"
                                         colspan="1" aria-label="">Удаление</th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($contacts->cities_group as $item)
                                    @include('back.groups.cities.cities_row',['item' => $item])
                                @endforeach

                                </tbody>

                            </table>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
                <!-- /.col -->
            </div>


            <div class="box box-warning group-item-widget" data-block="distributors">
                <div class="box-header with-border">
                    <h3 class="box-title">Дистрибьюторы</h3>
                    <button type="submit" data-parent="0" class="btn btn-primary pull-right add-flat-item">Добавить</button>
                </div>
                <div class="box-body">
                    <div class="groupflat-widget group-item-wrap">
                        @foreach($contacts->distributors_group as $item)
                            @include('back.groups.distributors.distributors_box', ['item' => $item])
                        @endforeach
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
                                   value="{{$contacts->seotitle_ru_field}}"
                                   data-name="seotitle_ru"
                                   data-type="seo"
                                   data-block="contacts"
                                   data-id="0">
                        </div>
                    </div>
                    <div class="tab-pane" id="tab_seo2">
                        <div class="form-group">
                            <label>Тайтл</label>
                            <input class="form-control string"
                                   type="text" placeholder=""
                                   value="{{$contacts->seotitle_kk_field}}"
                                   data-name="seotitle_kk"
                                   data-type="seo"
                                   data-block="contacts"
                                   data-id="0">
                        </div>
                    </div>
                    <div class="tab-pane" id="tab_seo3">
                        <div class="form-group">
                            <label>Тайтл</label>
                            <input class="form-control string"
                                   type="text" placeholder=""
                                   value="{{$contacts->seotitle_en_field}}"
                                   data-name="seotitle_en"
                                   data-type="seo"
                                   data-block="contacts"
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
                           value="{{$contacts->seokeywords_field}}"
                           data-name="seokeywords"
                           data-type="seo"
                           data-block="contacts"
                           data-id="0">
                </div>
                <div class="form-group">
                    <label>Описание страницы (description)</label>
                    <textarea class="form-control text"
                              data-name="seodescription"
                              data-type="seo"
                              data-block="contacts"
                              data-id="0">{{$contacts->seodescription_field}}</textarea>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection