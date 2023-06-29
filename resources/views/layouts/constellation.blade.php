@extends('layout')
@section('content')
<x-menu menu="astronomy"/>
@vite(['resources/css/constellardetail.css'])
<main>
    <div class="parent-detail">
        <div class="container-detail">
            <div class="up-detail">
                
                <h1><ion-icon class="sun" name="sunny"></ion-icon> Detail of Constellar <ion-icon class="sun" name="sunny"></ion-icon></h1>
                <div class="circle-detail" style="background-image: url(img/cas2.jpg);">
                </div>
                    <div class="cons-in1">
                        <p>details 1 <ion-icon class="star" name="star" ></ion-icon></p>
                    </div>
                    <div class="cons-in2">
                        <p>details 2 <ion-icon class="star" name="star" ></ion-icon></p>
                    </div>
                    <div class="cons-in3">
                        <p>details 3 <ion-icon class="star" name="star" ></ion-icon></p>
                    </div>
                    <div class="cons-in4">
                        <p>details 4 <ion-icon class="star" name="star" ></ion-icon></p>
                    </div>
                    <div class="cons-in5">
                        <p>details 5 <ion-icon class="star" name="star" ></ion-icon></p>
                    </div>
                    <div class="cons-in6">
                        <p>details 6 <ion-icon class="star" name="star" ></ion-icon></p>
                    </div>
    
            </div>
            <h2><ion-icon class="moon" name="moon"></ion-icon> History of Constellar <ion-icon class="moon" name="moon"></ion-icon></h2>
            <div class="down-detail">
                <div class="history-constellar">
                    <p>Constellar historical</p>
                </div>
            </div>

        </div>
    </div>
</main>
@endsection