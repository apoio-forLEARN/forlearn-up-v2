@extends('ga::layouts.master')

@section('content')
    <h1>Hello World</h1>

    <p>Module: {!! config('ga.name') !!}</p>
@endsection
