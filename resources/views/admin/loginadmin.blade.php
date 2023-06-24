<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Astronomy</title>
        <link rel="icon" href="{{asset('image/logo.jpg')}}">
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        @vite(['resources/css/admin/loginadmin.css','resources/js/admin/loginadmin.js'])
    </head>
    <body>
        <section>
            <form action="/admin/dashboard" method='post'>
                <h2>Login</h2>
                <div>
                    <input type="text" name="admin" required oninput="this.setCustomValidity('')" autocomplete="off">
                    <i class="fa fa-user"></i>
                    <label>Username</label>
                </div>
                <div>
                    <input type="password" name="passwords" required autocomplete="off">
                    <i class="fa fa-key"></i>
                    <label>Password</label>
                </div>
                <h2 class="tb">{{session('tb')}}</h2>
                <button type='submit'>Sign In</button>
            </form>
        </section>
    </body>
</html>
