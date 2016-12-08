@extends('layouts.app')
@section('content')
<div class="panel-body">
    <div class="col-sm-1"></div>
    <div class="row col-sm-10">
        <h2>Time Line</h2>
    </div>
    <div class="col-sm-1"></div>
    <div class="qa-message-list col-sm-11" id="wallmessages" >
        <div class="message-item" id="m16">
            <div class="message-inner">
                <div class="user-detail">
                    <h5 class="handle">Oleg Kolesnichenko</h5>
                    <div class="post-meta">
                        <div class="asker-meta">
                            <span class="qa-message-what"></span>
                            <span class="qa-message-when">
                                <span class="qa-message-when-data">Jan 21</span>
                            </span>
                            <span class="qa-message-who">
                                <span class="qa-message-who-pad">by </span>
                                <span class="qa-message-who-data"><a href="/news?id">Подробнее</a></span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
