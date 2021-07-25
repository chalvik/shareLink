@extends('layouts.app')

@section('content')

    <div>
        <time class="item-detail--created-date" datetime="2014-01-02">
            CREATED {{$model->created_at}}
        </time>
        <div class="item-detail--title">
            {{url($model->url,true)}}
        </div>
        <div>
            <a class="item-detail--url" href="{{route('link.redirectTo',['hash'=> $model->hash])}}" target="_blank">
                {{route('link.redirectTo',['hash'=> $model->hash])}}
            </a>
        </div>
    </div>
@endsection
