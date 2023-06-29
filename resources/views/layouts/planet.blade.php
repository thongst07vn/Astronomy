@extends('layout')
@section('content')
@vite(['resources/css/planet.css'])
<x-menu menu="astronomy"/>
    @foreach($planets as $i => $value)
        <p>{{$value['name']}}</p>
    @endforeach
@endsectionf