@extends('layouts.app')

@section('content')

    <h2>Input websites url for generate short link </h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    {!! Form::open(['route' => 'link.store' ]) !!}

    {!! Form::text('url', old('url'), ['placeholder'=> 'Input url ']);  !!}
    {!! Form::submit('Go to generate!');  !!}

    {!! Form::close() !!}
@endsection
