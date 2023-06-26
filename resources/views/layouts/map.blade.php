@extends('layout')
@section('content')
<x-menu menu="map"/>
@vite(['resources/js/app.js','resources/js/map.js','resources/css/map.css'])
  <link href= "{{asset('map/dist/leaflet.fullscreen.css')}}" rel='stylesheet' />
  <script src="{{asset('dist/Leaflet.fullscreen.min.js')}}"></script>

  <div class='limiter'>
      <h1>World Observatory</h1>
      <p>Welcome to world top Observatory</p>
        <div id='map' class='col12 row10'></div>
  </div>
<script>

</script>
</main>
@endsection