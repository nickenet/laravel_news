@extends('layouts.app')
@section('content')
<div class="panel-body">
    @include('common.errors')
    <form action="/admin" method="POST" class="form-horizontal">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="news" class="col-sm-3 control-label">Заголовок</label>
            <div class="col-sm-6">
                <input type="text" name="items" id="news-item" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label for="news" class="col-sm-3 control-label">Текст</label>
            <div class="col-sm-6">
                <textarea name="description" id="description-news" class="form-control"></textarea>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-6">
                <button type="submit" class="btn btn-default">
                    <i class="fa fa-plus"></i> Добавить новость
                </button>
            </div>
        </div>
    </form>
</div>
@if (count($news) > 0)
<div class="panel panel-default">
    <div class="panel-heading">
        <!--Текущая задача-->
    </div>

    <div class="panel-body">
        <table class="table table-striped task-table">

             <!--Заголовок таблицы--> 
            <thead>
            <th>Заголовок</th>
            <th>Действие</th>
            <th></th>
            </thead>

             <!--Тело таблицы--> 
            <tbody>
                @foreach ($news as $items)
                <tr>
                     <!--Имя задачи--> 
                    <td class="table-text col-sm-10">
                        <div>{{ $items->items }}</div>
                    </td>

                    <td>
                          <!--Кнопка Удалить--> 
                        <form action="/admin/{{ $items->id }}" method="POST">
                            {{ csrf_field() }}
                            <button class="btn btn-warning">Изменить</button>
                        </form>
                    </td>
                    <td>
                        <form action="/admin/{{ $items->id }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}

                            <button class="btn btn-danger">Удалить</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endif
@endsection