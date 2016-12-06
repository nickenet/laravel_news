@extends('layouts.app')
@section('content')
<div>ok</div>
@endsection
<!--@section('content')
<div>ok</div>-->
<!-- Bootstrap шаблон... -->
<!--<div class="panel-body">
     Отображение ошибок проверки ввода 
    @include('common.errors')
     Форма новой задачи 
    <form action="/admin" method="POST" class="form-horizontal">
        {{ csrf_field() }}
         Заголовок 
        <div class="form-group">
            <label for="news" class="col-sm-3 control-label">Заголовок</label>
            <div class="col-sm-6">
                <input type="text" name="items" id="news-item" class="form-control">
            </div>
        </div>
         текст новости 
        <div class="form-group">
            <label for="news" class="col-sm-3 control-label">Текст</label>
            <div class="col-sm-6">
                <input type="textarea" name="description" id="description-news" class="form-control">
            </div>
        </div>
         Кнопка добавления задачи 
        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-6">
                <button type="submit" class="btn btn-default">
                    <i class="fa fa-plus"></i> Добавить новость
                </button>
            </div>
        </div>
    </form>
</div>-->

<!--Текущие задачи -->
<!--@if (count($tasks) > 0)
<div class="panel panel-default">
    <div class="panel-heading">
        Текущая задача
    </div>

    <div class="panel-body">
        <table class="table table-striped task-table">

             Заголовок таблицы 
            <thead>
            <th>Task</th>
            <th>&nbsp;</th>
            </thead>

             Тело таблицы 
            <tbody>
                @foreach ($tasks as $task)
                <tr>
                     Имя задачи 
                    <td class="table-text">
                        <div>{{ $task->name }}</div>
                    </td>

                    <td>
                          Кнопка Удалить 
                        <form action="/task/{{ $task->id }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}

                            <button class="btn btn-danger">Удалить задачу</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endif-->
<!--@endsection-->