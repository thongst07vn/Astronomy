@extends('layout')
@section('content')
<x-menu menu="blog"/>
<main id='blog-page'>
    @vite(['resources/css/blog.css'])
    <section class="blog-banner"></section>
    <section class="blog-content">
        <div class='blog-side'>
          @foreach($blog as $i)
            @if($i->id%2 != 0)
            <div class='blog1'>
              <div>
                <img src="image/bigbang.jpg" alt="">
              </div>
              <div>
                {{$i->headtitle}}
                {{Str::limit($i->content, 297)}}
                <input type="button" value="Read more" class="read-more">
              </div>
            </div>
            @endif
            @if($i->id%2==0)
            <div class='blog2'>
              <div>
                <h1>{{$i->headtitle, 20}}</h1>
                {{!!html_entity_decode(Str::limit($i->content, 297))!!}}
                <input type="button" value="Read more" class="read-more">
              </div>
              <div>
                <img src="image/evo.png" alt="">
              </div>
            </div>
            @endif
          @endforeach
        </div>


          
        <div class='side-bar-1'></div>
    </section>
    <section class="blog-banner"></section>
</main>
@endsection