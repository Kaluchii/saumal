<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Номер телефона {{$item->sorter_field}}</h3>
        <button type="submit" class="btn btn-primary pull-right remove-flat-item" data-id="{{$item->id_field}}"
                data-block="phones">Удалить</button>
    </div>
    <div class="box-body">

        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="true">Рус</a></li>
                <li><a href="#tab_2" data-toggle="tab" aria-expanded="false">Қаз</a></li>
                <li><a href="#tab_3" data-toggle="tab" aria-expanded="false">Eng</a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="tab_1">
                    <div class="form-group">
                        <label>Город</label>
                        <input class="form-control string"
                               type="text" placeholder=""
                               value="{{$item->city_ru_field}}"
                               data-name="city_ru"
                               data-type="string"
                               data-block="phones"
                               data-id="{{$item->id_field}}">
                    </div>
                </div>
                <div class="tab-pane" id="tab_2">
                    <div class="form-group">
                        <label>Город</label>
                        <input class="form-control string"
                               type="text" placeholder=""
                               value="{{$item->city_kk_field}}"
                               data-name="city_kk"
                               data-type="string"
                               data-block="phones"
                               data-id="{{$item->id_field}}">
                    </div>
                </div>
                <div class="tab-pane" id="tab_3">
                    <div class="form-group">
                        <label>Город</label>
                        <input class="form-control string"
                               type="text" placeholder=""
                               value="{{$item->city_en_field}}"
                               data-name="city_en"
                               data-type="string"
                               data-block="phones"
                               data-id="{{$item->id_field}}">
                    </div>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label>Номер телефона</label>
            <input class="form-control string"
                   type="text" placeholder=""
                   value="{{$item->number_field}}"
                   data-name="number"
                   data-type="string"
                   data-block="phones"
                   data-id="{{$item->id_field}}">
        </div>

        <div class="col-xs-1 no-padding">
            <div class="form-group">
                <label>Позиция</label>
                <input type="number" class="form-control string"
                       data-id="{{$item->id_field}}"
                       data-block="phones"
                       data-name="sorter"
                       value="{{$item->sorter_field}}">
            </div>
        </div>
    </div>
</div>