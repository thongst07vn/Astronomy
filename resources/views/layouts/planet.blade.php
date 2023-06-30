@extends('layout')
@section('content')
@vite(['resources/css/planet.css'])
<x-menu menu="astronomy"/>
<main id="planets">
    <div class="container-fluid">
                    <!-- CONTENT -->
                    <!-- 12 CHOM SAO CUNG HOANG -->
        <div class="tab-content">
            <div id="content_1" class="tab-content-item">
                <ul class="month-stars">
                    @foreach($planets as $i => $value)
                    <li>
                        <div class="star-item">
                            <div class="star-top">
                                <a href="">
                                    <img src="{{asset($value['linkspic'])}}"  class="star-img">
                                </a>
                                <a href="/planet/{{$value['id']}}" class="choose-now">Choose now</a>
                            </div>
                            <div class="star-info">
                                <a href="/planet/{{$value['id']}}" class="product-name">{{$value['name']}}</a>
                                <a href="/planet/{{$value['id']}}" class="product-detail"></a>
                            </div>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</main>
<x-footer menu="astronomy"/>
@endsection