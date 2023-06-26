@extends('layout')
@section('content')
<x-menu menu="blog"/>
<main id='blog-page'>
    @vite(['resources/css/blog.css'])
    <section class="blog-banner"></section>
    <section class="blog-content">
        <div class='blog-side'>
          @foreach($blog as $i => $value)
            @if(($i+1)%2 != 0)
            <div class='blog1'>
              <div>
                <img src="{{asset($value -> imgtitle)}}" alt="">
              </div>
              <div>
                <h1>{!!html_entity_decode($value->headtitle)!!}</h1>
                {!!html_entity_decode(Str::limit($value->content, 297))!!}

                <p><a class="read-more" href="blog/{{$value->id}}">Read More</a></p>
              </div>
            </div>
            @endif
            @if(($i+1)%2==0)
            <div class='blog2'>
              <div>
                <h1>{!!html_entity_decode($value->headtitle)!!}</h1>
                {!!html_entity_decode(Str::limit($value->content, 297))!!}
                <p><a class="read-more" href="blog/{{$value->id}}">Read More</a></p>
              </div>
              <div>
                <img src="{{asset($value -> imgtitle)}}" alt="">
              </div>
            </div>
            @endif
          @endforeach
          {{ $blog->render('list') }}
        </div>
        
        <div class='side-bar-1'></div>
    </section>
    <section class="blog-banner"></section>
</main>
@endsection