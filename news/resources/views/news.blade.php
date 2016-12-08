@extends('layouts.app')
@section('content')
<div class="panel-body">
    <div class="row">
    <div class="col-sm-2"></div>
    <div class="col-sm-10">
        <h2>Time Line</h2>
    </div>
    </div>
    <div class="qa-message-list" id="wallmessages" >
        @foreach ($news as $items)
    <div class="row">
    <div class="col-sm-2"></div>
        <div class="message-item col-sm-6" id="{{$items->id}}">
            <div class="message-inner">
                <div class="user-detail">
                    <h5 class="handle">{{$items->items}}</h5>
                    <div class="post-meta">
                        <div class="asker-meta">
                            <span class="qa-message-what"></span>
                            <span class="qa-message-when">
                                <span class="qa-message-when-data">{{ $items->updated_at }}</span>
                            </span>
                            <span class="qa-message-who">
                                <span class="qa-message-who-pad"> - </span>
                                <span class="qa-message-who-data"><a href="/news/{{$items->id}}">Подробнее</a></span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <div class="col-sm-2"></div>
    </div>
        @endforeach
    </div>
    
</div>
@endsection
