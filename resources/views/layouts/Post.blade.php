@extends('layout')
@section('content')
<x-menu menu="blog"/>
<main id='blog-page'>
    @vite(['resources/css/blog.css'])
    <section class="blog-banner"></section>
    <section class="blog-content">
        <div class='blog-side'>
        </div>


          
        <div class='side-bar-1'></div>
    </section>
    <section class="blog-banner"></section>
</main>
@endsection