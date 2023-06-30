<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Astronomy</title>
    <link rel="icon" href="{{asset('image/logo.jpg')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
    @vite(['resources/css/forgot.css','resources/js/forgot.js'])
</head>
<body>
    <section class="container" id="reset">
        <h2>Reset Password</h2>
        <form action="" method='post'>
            <input type="password" placeholder="Password" name='passwords' autocomplete="off"/>
            <span><i class="fa-solid fa-eye-slash"></i></span>
            <input type="password" placeholder="Re-Password" name='repasswords' autocomplete="off"/>
            <span><i class="fa-solid fa-eye-slash"></i></span>
            <ul class="checklist hiden">
                <li><i class="fa-solid fa-x"></i> Uppercase Letter</li>
                <li><i class="fa-solid fa-x"></i> Numbers</li>
                <li><i class="fa-solid fa-x"></i> 8 - 20 Characters</li>
                <li>incorrect Re-Password</li>
            </ul>
            <button type='submit'>Sign Up</button>
		</form>
    </section>
</body>
</html>