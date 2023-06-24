@extends('layout')
@section('content')
<x-menu menu="post"/>
<main id='post-page'>
    @vite(['resources/css/post.css'])
    <section class="post-banner"></section>
    <section class="post-content">
        <div class='post-side'>
            <img src="{{asset('($post -> imgtitle)')}}" alt="">
            <h1>{{$post->headtitle}}</h1>
            {!!html_entity_decode($post->content)!!}
        </div> 
        <div class='side-bar-1'></div>
    </section>
    <section class="post-banner"></section>
</main>
@endsection