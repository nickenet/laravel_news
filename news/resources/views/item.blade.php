@extends('layouts.app')
@section('content')
<div class="panel-body">
    <div class="row">
    <div class="col-sm-2"></div>
    <div class="col-sm-10">
        <h3>{{$item->items}}</h3>
    </div>
    </div>
    <div class="qa-message-list" id="wallmessages" >
        
    <div class="row">
    <div class="col-sm-1"></div>
        <div class="message-item col-sm-10 text-justify" id="{{$item->id}}">
            {{$item->description}}
        </div>
    <div class="col-sm-1"></div>
    </div>
        <hr align="center" width="80%"/>
        <div class="row">
        <div class="col-sm-11 text-right">Добавлено: {{$item->updated_at}}</div> 
        <div class="col-sm-1"></div>
        </div>
    </div>
    
</div>
@endsection
