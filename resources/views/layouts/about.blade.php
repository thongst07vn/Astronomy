@extends('layout')
@section('content')
@vite([''resources/css/about.css''])
<x-menu menu="about"/>
<main>
  <div style="padding-left:16px">
    <h1>About</h1>
    <h2>Responsive Login Form in Navbar</h2>
    <p>Navigation menu with a login form and a submit button inside of it.</p>
    <p>Resize the browser window to see the responsive effect.</p>
  </div>
</main>
@endsection