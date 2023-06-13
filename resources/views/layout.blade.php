<!DOCTYPE html>
<html>
<head>
    <title>Astronomy</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
    <link rel="icon" href="image/logo.jpg">
    <script type="text/javascript" href="https://dap.digitalgov.gov/Universal-Federated-Analytics-Min.js?agency=NASA&subagency=EyesOnTheSolarSystem&dclink=true&sp=search,s,q&sdor=false&exts=tif,tiff" defer></script>
    <script type="text/javascript" src="{{asset('src/app/vendor/jquery/dist/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('src/app/vendor/foundation-sites/dist/foundation.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('src/app/vendor/stats/build/stats.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('src/app/vendor/tweenjs/build/tween.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('src/app/vendor/three.js/three.min.js')}}"></script>
    <script data-main="src/app/app" src="{{asset('src/app/vendor/requirejs/require.js')}}"></script>
    @vite(['resources/css/app.css','resources/css/main.css'])
</head>
<body>
    @yield('content')
</body>
</html>