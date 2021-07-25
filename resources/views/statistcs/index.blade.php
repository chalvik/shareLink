@extends('layouts.app')

@section('content')

    <table>
        <tr>
            <th>ссылка</th>
            <th>ip</th>
            <th>Agent</th>
        </tr>
        @foreach($models as $model)
        <tr>
            <td>{{$model->link->url}}</td>
            <td>{{$model->ip}}</td>
            <td>{{$model->user_agent}}</td>
        </tr>
        @endforeach
    </table>

@endsection
