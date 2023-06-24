<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Astronomy</title>
    <link rel="icon" href="{{asset('image/logo.jpg')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
	@vite(['resources/css/login.css','resources/js/login.js'])
</head>
<body>
	<section class="container" id="container">
		<div class="form-container sign-up-container" id="Sign-Up">
			<h1 class="titleSU">Create Account</h1>
			<form action="/login" id="signup" method='post'>
				<input type="text" placeholder="Gmail" name='username' autocomplete="off"/>
				<input type="password" placeholder="Password" name='passwords' autocomplete="off"/>
				<span><i class="fa-solid fa-eye-slash"></i></span>
				<input type="password" placeholder="Re-Password" name='repasswords' autocomplete="off"/>
				<span><i class="fa-solid fa-eye-slash"></i></span>
				<ul class="checklist hiden">
					<li><i class="fa-solid fa-x"></i> Gmail is invalidate</li>
					<li><i class="fa-solid fa-x"></i> Uppercase Letter</li>
					<li><i class="fa-solid fa-x"></i> Numbers</li>
					<li><i class="fa-solid fa-x"></i> 8 - 20 Characters</li>
					<li>incorrect Re-Password</li>
				</ul>
				<button type='submit'>Sign Up</button>
			</form>
		</div>
		<div class="form-container sign-in-container" id="Sign-In">
			<h1 class="titleSI">Sign in</h1>
			<form action="/home" id="signin" method="post">
				<input type="text" placeholder="Gmail" name='usernamesignin' autocomplete="off"/>
				<input type="password" placeholder="Password" name='passwordssignin' autocomplete="off"/>
				<span ><i class="fa-solid fa-eye-slash"></i></span>
				<input type="checkbox" name="checkbox" id="checkbox" value="lsRememberMe">
				<label for="checkbox">Remember Me</label>
				<a href="/login/forgotpasswword">Forgot your password?</a>
				<span class="tb">{{session('tb')}}</span>
				<button type='submit'>Sign In</button>
			</form>
		</div>
		<div class="overlay-container">
			<div class="overlay">
				<div class="overlay-panel overlay-left">
					<h1>Welcome Back!</h1>
					<p>To keep connected with us please login with your personal info</p>
					<button class="ghost" id="signIn">Sign In</button>
				</div>
				<div class="overlay-panel overlay-right">
					<h1>Hello, Friend!</h1>
					<p>Enter your personal details and start journey with us</p>
					<button class="ghost" id="signUp">Sign Up</button>
				</div>
			</div>
		</div>
    </section>
</body>
</html>