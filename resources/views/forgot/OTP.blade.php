<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Astranomy</title>
    @vite(['resources/css/forgot.css','resources/js/forgot.js'])
</head>
<body>
    <section class="container">
        <h2>OTP Verification</h2>
        <form action="resetpassword" class="form-container" data-animate-effect="fadeIn">
            <div class="alert alert-success" role="alert">Enter Your OTP</div>
            <ul id="otp">
                <input type="text" id="one" name ="one" maxlength="1">
                <input type="text" id="two" name ="two" maxlength="1">
                <input type="text" id="three" name ="three" maxlength="1">
                <input type="text" id="four" name ="four" maxlength="1">
            </ul>
            <p>{{$tam}}</p>
            <button type='submit' id='bt2'>Submit</button>
        </form>
    </section>
</body>
</html>
