@extends('layout')
@section('content')
<x-menu menu="map"/>
@vite(['resources/js/app.js','resources/css/map.css'])
<script src="{{asset('map/dist/Leaflet.fullscreen.js')}}"></script>  
  <div class='limiter'>
      <h1>World Observatory</h1>
      <p>Welcome to world top Observatory</p>
      <div id='map' class='col12 row10'></div>
  </div>
@vite(['resources/js/map.js']) 
</main>
@endsection