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
                <img src="{{$i -> imgtitle}}" alt="">
              </div>
              <div>
                <h1>{!!html_entity_decode($i->headtitle)!!}</h1>
                {!!html_entity_decode(Str::limit($i->content, 297))!!}
                <a class="read-more" href="blog/{{$i->id}}">Read More</a>
              </div>
            </div>
            @endif
            @if($i->id%2==0)
            <div class='blog2'>
              <div>
                <h1>{!!html_entity_decode($i->headtitle)!!}</h1>
                {!!html_entity_decode(Str::limit($i->content, 297))!!}
                <a class="read-more" href="blog/{{$i->id}}">Read More</a>
              </div>
              <div>
                <img class="read-more" src="{{$i -> imgtitle}}" alt="">
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