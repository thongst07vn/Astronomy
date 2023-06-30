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
                        <p>Abbreviations: {{$value -> abbr}}</p>
                    </div>
                    <div class="cons-in2">
                        <p>Name: {{$value -> name}}</p>
                    </div>
                    <div class="cons-in3">
                        <p>Symbolize: {{$value -> symbolize}}</p>
                    </div>
                    <div class="cons-in4">
                        <p>Acreage: {{$value -> acreage}}</p>
                    </div>
                    <div class="cons-in5">
                        <p>Discovered by: {{$value -> discovered_by}}</p>
                    </div>
                    <div class="cons-in6">
                        <p>Discovered date: {{$value -> discovered_date}}</p>
                    </div>
                
            </div>
            <h3>  History of Constellar</h3>
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
                        <p>Name: {{$value -> name}}</p>
                    </div>
                    <div class="cons-in2">
                        <p><ion-icon class="star" name="star" >Symbol: {{$value -> unicode_character}}</ion-icon></p>
                    </div>
                    <div class="cons-in3">
                        <p>Gloss: {{$value -> gloss}}</p>
                    </div>
                    <div class="cons-in4">
                        <p>Period: {{$value -> period}}</p>
                    </div>
                    <div class="cons-in5">
                        <p>Element: {{ucfirst(trans($value -> zodiac_element))}}  </p>
                    </div>
            </div>
            <h3>History of Constellar</h3>
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