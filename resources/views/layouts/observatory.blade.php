@extends('layout')
@section('content')
<x-menu menu="observatory"/>
<script src="https://unpkg.com/leaflet@1.3.3/dist/leaflet.js"
   integrity="sha512-tAGcCfR4Sc5ZP5ZoVz0quoZDYX5aCtEm/eu1KhSLj2c9eFrylXZknQYmxUssFaVJKvvc0dJQixhGjG2yXWiV9Q=="
   crossorigin=""></script>

@vite(['resources/css/map.css'])
<script src="{{asset('map/dist/Leaflet.fullscreen.js')}}"></script>
  <div class='limiter'>
      <h1>World Observatory</h1>
      <p>Welcome to world top Observatory</p>
      <div id='map'></div>
  </div>
@vite(['resources/js/map.js'])
</main>
@endsection