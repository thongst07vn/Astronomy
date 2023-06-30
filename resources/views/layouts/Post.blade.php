@extends('layout')
@section('content')
<x-menu menu="blog"/>
<main id='post-page'>
    @vite(['resources/css/post.css'])
    <section class="post-banner"></section>
    <section class="post-content">
        @foreach ($post as $i)
        <div class='post-side'>
            <img src="{{asset($i -> imgtitle)}}" alt="">
            <h1>{{$i->headtitle}}</h1>
            {!!html_entity_decode($i->content)!!}
        </div> 
        @endforeach
    </section>
    <section class="post-banner"></section>
</main>
<x-footer menu="blog"/>
@endsection