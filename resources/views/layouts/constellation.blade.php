@extends('layout')
@section('content')
<x-menu menu="astronomy"/>
@vite(['resources/css/constellardetail.css'])
    @foreach($constellar as $i => $value)
        @foreach($allconstellar as $j)                              
                @if(($value->name)==($j -> name))
<main id="#constellardetail">
    <div class="parent-detail">
        <div class="container-detail">
            <div class="up-detail">
                

                <h1><ion-icon class="sun" name="sunny"></ion-icon> Detail of Constellar <ion-icon class="sun" name="sunny"></ion-icon></h1>
                <div class="circle-detail" style="background-image: url({{asset($value -> linkspic)}});">               
                </div>
                
                    <div class="cons-in1">
                        <p>{{$value -> abbr}} <ion-icon class="star" name="star" ></ion-icon></p>
                    </div>
                    <div class="cons-in2">
                        <p>{{$value -> name}} <ion-icon class="star" name="star" ></ion-icon></p>
                    </div>
                    <div class="cons-in3">
                        <p>{{$value -> symbolize}} <ion-icon class="star" name="star" ></ion-icon></p>
                    </div>
                    <div class="cons-in4">
                        <p>{{$value -> acreage}} <ion-icon class="star" name="star" ></ion-icon></p>
                    </div>
                    <div class="cons-in5">
                        <p>{{$value -> discovered_by}} <ion-icon class="star" name="star" ></ion-icon></p>
                    </div>
                    <div class="cons-in6">
                        <p>{{$value -> discovered_date}} <ion-icon class="star" name="star" ></ion-icon></p>
                    </div>
                
            </div>
            <h3><ion-icon class="moon" name="moon"></ion-icon> History of Constellar <ion-icon class="moon" name="moon"></ion-icon></h3>
            <div class="down-detail">
                <div class="history-constellar">
                    <p>{{$value -> history}}</p>
                </div>
            </div>
        </div>
    </div>                     
</main>
    @endif
    @endforeach
    @endforeach
    @foreach($zodiac as $i => $value)
        @foreach($allzodiac as $j)                              
                @if(($value->name)==($j -> name))
    <main id="#constellardetail">
    <div class="parent-detail">
        <div class="container-detail">
            <div class="up-detail">
                

                <h1><ion-icon class="sun" name="sunny"></ion-icon> Detail of Constellar <ion-icon class="sun" name="sunny"></ion-icon></h1>
                <div class="circle-detail" style="background-image: url({{asset($value -> linkspic)}});">               
                </div>
                
                    <div class="cons-in1">
                        <p>{{$value -> name}} <ion-icon class="star" name="star" ></ion-icon></p>
                    </div>
                    <div class="cons-in2">
                        <p><ion-icon class="star" name="star" >{{$value -> unicode_character}}</ion-icon></p>
                    </div>
                    <div class="cons-in3">
                        <p>{{$value -> gloss}} <ion-icon class="star" name="star" ></ion-icon></p>
                    </div>
                    <div class="cons-in4">
                        <p>{{$value -> period}} <ion-icon class="star" name="star" ></ion-icon></p>
                    </div>
                    <div class="cons-in5">
                        <p>{{ucfirst(trans($value -> zodiac_element))}} <ion-icon class="star" name="star" ></ion-icon></p>
                    </div>
            </div>
            <h3><ion-icon class="moon" name="moon"></ion-icon> History of Constellar <ion-icon class="moon" name="moon"></ion-icon></h3>
            <div class="down-detail">
                <div class="history-constellar">
                    <p>{{$value -> history}}</p>
                </div>
            </div>
        </div>
    </div>                     
</main>
                        @endif
                @endforeach
            @endforeach
<x-footer menu="astronomy"/>
@endsection