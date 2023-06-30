@extends('layout')
@section('content')
<x-menu menu="astronomy"/>
@vite(['resources/css/planetdetail.css'])
<main id="#constellardetail">
    <div class="parent-detail">
        <div class="container-detail">
            <div class="up-detail">
                

                <h1><ion-icon class="sun" name="sunny"></ion-icon> Detail of Constellar <ion-icon class="sun" name="sunny"></ion-icon></h1>
                <div class="circle-detail" style="background-image: url({{asset($planets['linkspic'])}});">               
                </div>
                
                    <div class="cons-in1">
                        <p>Name: {{$planets['name']}} <ion-icon class="star" name="star" ></ion-icon></p>
                    </div>
                    <div class="cons-in2">
                        <p>discovered_date: {{$planets['discovered_date']}} <ion-icon class="star" name="star" ></ion-icon></p>
                    </div>
                    <div class="cons-in3">
                        <p>Diameter: {{$planets['diameter']}} Km<ion-icon class="star" name="star" ></ion-icon></p>
                    </div>
                    <div class="cons-in4">
                        <p>Atmosphere: {{$planets['atmosphere']}} <ion-icon class="star" name="star" ></ion-icon></p>
                    </div>
                    <div class="cons-in5">
                        <p>Distance from sun: {{$planets['distanceFromParent']}} Km<ion-icon class="star" name="star" ></ion-icon></p>
                    </div>
                    <div class="cons-in6">
                        <p>Orbital Period {{$planets['orbitalPeriod']}} days<ion-icon class="star" name="star" ></ion-icon></p>
                    </div>
                
            </div>

            <h3><ion-icon class="moon" name="moon"></ion-icon> More Information About {{$planets['name']}} <ion-icon class="moon" name="moon"></ion-icon></h3>
            <div class="down-detail">
                <div class="history-constellar">
                    <p>Gravity: {{$planets['gravity']}} m/s²</p>
                    <p>Density: {{$planets['density']}} Kg/m<sup>3</sup></p>
                    <p>Orbital velocity: {{$planets['gravity']}} Km/s</p>
                    <p>Length of day: {{$planets['lengthOfDay']}} Hrs</p>
                    <p>Orbital velocity: {{$planets['orbitalVelocity']}} Km/s</p>
                    <p>Orbital inclination: {{$planets['orbitalInclination']}} °</p>
                    <p>Mean temperature: {{$planets['meanTemperature']}} °C</p>
                </div>
            </div>
        </div>
    </div>                     
</main>
<x-footer menu="astronomy"/>
@endsection