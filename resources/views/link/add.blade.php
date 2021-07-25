@extends('layouts.app')

@section('content')

    <h2>Input websites url for generate short link </h2>

    {!! Form::open(['route' => 'link.store' ]) !!}

    {!! Form::text('url', old('url'), ['placeholder'=> 'Input url ']);  !!}
    {!! Form::submit('Go to generate!');  !!}

    {!! Form::close() !!}
@endsection
