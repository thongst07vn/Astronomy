<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Astronomy</title>
    <link rel="icon" href="{{asset('image/logo.jpg')}}">
    @vite(['resources/css/forgot.css','resources/js/forgot.js'])
</head>
<body>
    <section class="container">
        <h2>Forgot Password</h2>
        <form action="/login/forgotpasswword" method="post" class="form-container" data-animate-effect="fadeIn">
            <input type="email" class="form-control" id="email" name="email" placeholder="Email" autocomplete="off">
            <a href="/login">Return to  LogIn</a>
            <span class="tb">{{$tb}}</span>
            <button type='submit' id='bt1'>Send</button>
        </form>
    </section>
</body>
</html>

