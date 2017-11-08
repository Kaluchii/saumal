@extends('back.layout')
@section('content')

@include('back.content-top', ['title' => 'Новости'])
<div class="row">
    <div class="col-xs-12">
        <div class="box table-widget">
            <div class="box-header with-border">
                <h3 class="box-title">
                    Список новостей
                </h3>
                <button type="button" data-parent="0" class="btn btn-primary pull-right add-group-item">Добавить</button>
                <div class="col-xs-5 pull-right">
                    <input type="text" class="form-control add-item"
                           data-name="item_title_ru"
                           data-block="news_item"
                            placeholder="Название элемента"
                    >
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table class="table table-bordered table-hover dataTable table-widget-selector" role="grid"
                       aria-describedby="example2_info"
                       data-block="news">
                    <thead>
                    <tr role="row">
                        <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1"
                            colspan="1" aria-sort="ascending"
                            aria-label="">Название</th>
                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                            colspan="1" aria-label="">Дата редактирования</th>
                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                            colspan="1" aria-label="">Статус публикации</th>
                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                            colspan="1" aria-label="">Порядок выдачи</th>
                        <th  tabindex="0"  rowspan="1"
                             colspan="1" aria-label="">Удаление</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($news->news_item_group as $item)
                        @include('back.groups.news_item.news_item_row',['item' => $item])
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

@endsection