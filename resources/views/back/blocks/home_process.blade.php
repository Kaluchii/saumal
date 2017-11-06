@extends('back.layout')
@section('content')
    @include('back.content-top', ['title' => 'Процесс производства'])
    <div class="box box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">Поля для редактирования</h3>
        </div>
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#tab_с1" data-toggle="tab" aria-expanded="true">Рус</a></li>
                <li><a href="#tab_с2" data-toggle="tab" aria-expanded="false">Қаз</a></li>
                <li><a href="#tab_с3" data-toggle="tab" aria-expanded="false">Eng</a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="tab_с1">
                    <div class="form-group">
                        <label>Заголовок блока</label>
                        <input class="form-control string"
                               type="text" placeholder=""
                               value="{{$home_process->block_title_ru_field}}"
                               data-name="block_title_ru"
                               data-type="string"
                               data-block="home_process"
                               data-id="0">
                    </div>
                    <div class="form-group">
                        <label>Текст под заголовком</label>
                        <textarea class="form-control text"
                                  data-name="block_text_ru"
                                  data-type="text"
                                  data-block="home_process"
                                  data-id="0">{{$home_process->block_text_ru_field}}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Текст около кнопки (внизу)</label>
                        <textarea class="form-control text"
                                  data-name="bottom_text_ru"
                                  data-type="text"
                                  data-block="home_process"
                                  data-id="0">{{$home_process->bottom_text_ru_field}}</textarea>
                    </div>
                </div>
                <div class="tab-pane" id="tab_с2">
                    <div class="form-group">
                        <label>Заголовок блока</label>
                        <input class="form-control string"
                               type="text" placeholder=""
                               value="{{$home_process->block_title_kk_field}}"
                               data-name="block_title_kk"
                               data-type="string"
                               data-block="home_process"
                               data-id="0">
                    </div>
                    <div class="form-group">
                        <label>Текст под заголовком</label>
                        <textarea class="form-control text"
                                  data-name="block_text_kk"
                                  data-type="text"
                                  data-block="home_process"
                                  data-id="0">{{$home_process->block_text_kk_field}}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Текст около кнопки (внизу)</label>
                        <textarea class="form-control text"
                                  data-name="bottom_text_kk"
                                  data-type="text"
                                  data-block="home_process"
                                  data-id="0">{{$home_process->bottom_text_kk_field}}</textarea>
                    </div>
                </div>
                <div class="tab-pane" id="tab_с3">
                    <div class="form-group">
                        <label>Заголовок блока</label>
                        <input class="form-control string"
                               type="text" placeholder=""
                               value="{{$home_process->block_title_en_field}}"
                               data-name="block_title_en"
                               data-type="string"
                               data-block="home_process"
                               data-id="0">
                    </div>
                    <div class="form-group">
                        <label>Текст под заголовком</label>
                        <textarea class="form-control text"
                                  data-name="block_text_en"
                                  data-type="text"
                                  data-block="home_process"
                                  data-id="0">{{$home_process->block_text_en_field}}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Текст около кнопки (внизу)</label>
                        <textarea class="form-control text"
                                  data-name="bottom_text_en"
                                  data-type="text"
                                  data-block="home_process"
                                  data-id="0">{{$home_process->bottom_text_en_field}}</textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="box box-info group-item-widget" data-block="home_stages">
        <div class="box-header with-border">
            <h3 class="box-title">Этапы производства</h3>
            <button type="submit" data-parent="0" class="btn btn-primary pull-right add-flat-item">Добавить</button>
        </div>
        <div class="box-body">
            <div class="groupflat-widget group-item-wrap">
                @foreach($home_process->home_stages_group as $item)
                    @include('back.groups.home_stages.home_stages_box', ['item' => $item])
                @endforeach
            </div>
        </div>
    </div>
@endsection