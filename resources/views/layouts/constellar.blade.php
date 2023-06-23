@extends('layout')
@section('content')
<x-menu menu="constellation"/>
@vite(['resources/css/constellar.css','resources/js/constellar.js'])
<main>
    <div class="container-fluid">

            <!-- SLIDE -->
            <article>
                <div class="slideshow-container">
                    <div class="mySlides fade">
                        <div class="number-text">1 / 3</div>
                        <img class="my-pic" src="img/banner1.jpg" style="width:100%">
                        
                    </div>
        
                    <div class="mySlides fade">
                        <div class="number-text">2 / 3</div>
                        <img class="my-pic" src="img/banner2.jpg" style="width:100%">
                    
                    </div>
                    
                    <div class="mySlides fade">
                        <div class="number-text">3 / 3</div>
                        <img class="my-pic" src="img/banner3.jpg" style="width:100%">
                        
                    </div>
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
                                            <img src="{{$i -> linkspic}}"  class="star-img">
                                        </a>
                                        <a href="" class="choose-now">Choose now</a>
                                    </div>
                                    <div class="star-info">
                                        <a href="" class="product-name">{{$i -> name}}</a>
                                        <a href="" class="product-detail">
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
                            @foreach ($constellation as $i)
                            <li>
                                <div class="star-item">
                                    <div class="star-top">
                                        <a>
                                            <img src="img/cassiopeia.jpg"  class="star-img">
                                        </a>
                                        <a href="" class="choose-now">Choose now</a>
                                    </div>
                                    <div class="star-info">
                                        <a href="" class="product-name">{{$i -> name}}</a>
                                        <a href="" class="product-detail">
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
            $(document).ready(function(){
                //An content
             $('.tab-content-item').hide();
             $('.tab-content-item:first-child').fadeIn();
             $('.nav-tabs li').click(function(){
                //Active nav-tabs
                $('.nav-tabs li').removeClass('active');
                $(this).addClass('active');

                //Show tab-content star
                let id_tab_content = $(this).children('a').attr('href');
                $('.tab-content-item').hide();
                $(id_tab_content).fadeIn();
                return false;
             });
            });
        </script>
@endsection