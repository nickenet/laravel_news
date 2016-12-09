@extends('layouts.app')
@section('content')
<div class="panel-body">
    @include('common.errors')
    <form action="/savenews/{{$item->id}}" method="POST" class="form-horizontal">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="news" class="col-sm-3 control-label">Заголовок</label>
            <div class="col-sm-6">
                <input type="text" name="items" id="news-item" class="form-control" value="{{$item->items}}">
            </div>
        </div>
        <div class="form-group">
            <label for="news" class="col-sm-3 control-label">Текст</label>
            <div class="col-sm-6">
                <textarea name="description" id="description-news" class="form-control">{{$item->description}}</textarea>
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
@endsection