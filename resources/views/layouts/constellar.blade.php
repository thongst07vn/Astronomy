@extends('layout')
@section('content')
<x-menu menu="astronomy"/>
@vite(['resources/css/constellar.css','resources/js/app.js','resources/js/constellar.js'])
<main>
    <div class="container-fluid">

            <!-- SLIDE -->
            <article>
                <div class="slideshow-container">
                <img class="mySlides my-pic" src="{{asset('constellar/banner/banner1.jpg')}}" style="width:100%; object-fit:cover;">
                    <img class="mySlides my-pic" src="{{asset('constellar/banner/banner2.jpg')}}" style="width:100%; object-fit:cover;">
                    <img class="mySlides my-pic" src="{{asset('constellar/banner/banner3.jpg')}}" style="width:100%; object-fit:cover;">
                <br>
                <div style="text-align:center">
                    <span class="dot"></span> 
                    <span class="dot"></span> 
                    <span class="dot"></span> 
                </div>
            </article> 
        <div class="container-star">  
            <div class="content-star">
                </div >
                <!-- TAB -->
                    <div class="tabs">
                        <ul class="nav-tabs">
                            <li class="active"><a href="#content_1" >12 chòm cung hoàng đạo</a></li>
                            <li><a href="#content_2">Các chòm sao khác</a></li>
                        </ul>
                        
                    
                    </div>
                    <!-- CONTENT -->
                    <!-- 12 CHOM SAO CUNG HOANG -->
                <div class="tab-content">
                    <div id="content_1" class="tab-content-item">
                        <ul class="month-stars">
                            @foreach($zodiac as $i)
                            <li>
                                <div class="star-item">
                                    <div class="star-top">
                                        <a href="">
                                            <img src="{{asset($i -> linkspic)}}"  class="star-img">
                                        </a>
                                        <a href="/constellation/{{$i -> name}}" class="choose-now">Choose now</a>
                                    </div>
                                    <div class="star-info">
                                        <a href="/constellation/{{$i -> name}}" class="product-name">{{$i -> name}}</a>
                                        <a href="/constellation/{{$i -> name}}" class="product-detail">
                                            <p>{{$i -> period}}</p>                   
                                        </a>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>


            
                    <div id="content_2" class="tab-content-item">
                        <ul class="month-stars">
                            @foreach ($constellar as $i)
                            <li>
                                <div class="star-item">
                                    <div class="star-top">
                                        <a>
                                            <img src="{{asset($i -> linkspic)}}"  class="star-img">
                                        </a>
                                        <a href="/constellation/{{$i -> name}}" class="choose-now">Choose now</a>
                                    </div>
                                    <div class="star-info">
                                        <a href="/constellation/{{$i -> name}}" class="product-name">{{$i -> name}}</a>
                                        <a href="/constellation/{{$i -> name}}" class="product-detail">
                                            <u>Discovery By:</u><p>{{$i -> discovered_by}}</p>
                                        </a>
                                    </div>
                                </div>
                            </li> 
                            @endforeach                         
                        </ul>
                    </div>
                </div>
            </div> 
    </div>
</main>
        <script>
            
        </script>
@endsection