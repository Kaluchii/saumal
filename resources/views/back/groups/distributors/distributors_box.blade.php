<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Дистрибьютор {{$item->sorter_field}}</h3>
        <button type="submit" class="btn btn-primary pull-right remove-flat-item" data-id="{{$item->id_field}}"
                data-block="distributors">Удалить
        </button>
    </div>
    <div class="nav-tabs-custom">
        <ul class="nav nav-tabs">
            <li class="active"><a href="#tab_{{$item->id_field.$item->sorter_field.'1'}}" data-toggle="tab"
                                  aria-expanded="true">Рус</a></li>
            <li><a href="#tab_{{$item->id_field.$item->sorter_field.'2'}}" data-toggle="tab"
                   aria-expanded="false">Қаз</a></li>
            <li><a href="#tab_{{$item->id_field.$item->sorter_field.'3'}}" data-toggle="tab"
                   aria-expanded="false">Eng</a></li>
        </ul>
        <div class="tab-content">

            <div class="tab-pane active" id="tab_{{$item->id_field.$item->sorter_field.'1'}}">
                <div class="form-group">
                    <label>Город</label>
                    <input class="form-control string"
                           type="text" placeholder=""
                           value="{{$item->item_title_ru_field}}"
                           data-name="item_title_ru"
                           data-type="string"
                           data-block="distributors"
                           data-id="{{$item->id_field}}">
                </div>
                <div class="form-group">
                    <label>Адрес</label>
                    <textarea class="form-control text" data-reg="true"
                              data-name="item_text_ru"
                              data-type="text"
                              data-block="distributors"
                              data-id="{{$item->id_field}}">{{$item->item_text_ru_field}}</textarea>
                </div>
            </div>

            <div class="tab-pane" id="tab_{{$item->id_field.$item->sorter_field.'2'}}">
                <div class="form-group">
                    <label>Город</label>
                    <input class="form-control string"
                           type="text" placeholder=""
                           value="{{$item->item_title_kk_field}}"
                           data-name="item_title_kk"
                           data-type="string"
                           data-block="distributors"
                           data-id="{{$item->id_field}}">
                </div>
                <div class="form-group">
                    <label>Адрес</label>
                    <textarea class="form-control text" data-reg="true"
                              data-name="item_text_kk"
                              data-type="text"
                              data-block="distributors"
                              data-id="{{$item->id_field}}">{{$item->item_text_kk_field}}</textarea>
                </div>
            </div>

            <div class="tab-pane" id="tab_{{$item->id_field.$item->sorter_field.'3'}}">
                <div class="form-group">
                    <label>Город</label>
                    <input class="form-control string"
                           type="text" placeholder=""
                           value="{{$item->item_title_en_field}}"
                           data-name="item_title_en"
                           data-type="string"
                           data-block="distributors"
                           data-id="{{$item->id_field}}">
                </div>
                <div class="form-group">
                    <label>Адрес</label>
                    <textarea class="form-control text" data-reg="true"
                              data-name="item_text_en"
                              data-type="text"
                              data-block="distributors"
                              data-id="{{$item->id_field}}">{{$item->item_text_en_field}}</textarea>
                </div>
            </div>
        </div>
    </div>
    <div class="box-body">
        <div class="form-group">
            <label>Широта (Координаты метки на карте)</label>
            <input class="form-control string"
                   type="text" placeholder=""
                   value="{{$item->lon_field}}"
                   data-name="lon"
                   data-type="string"
                   data-block="distributors"
                   data-id="{{$item->id_field}}">
        </div>
        <div class="form-group">
            <label>Долгота (Координаты метки на карте)</label>
            <input class="form-control string"
                   type="text" placeholder=""
                   value="{{$item->lat_field}}"
                   data-name="lat"
                   data-type="string"
                   data-block="distributors"
                   data-id="{{$item->id_field}}">
        </div>
    </div>
</div>