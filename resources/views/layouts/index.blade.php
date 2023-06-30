@extends('layout')
@section('content')
@vite([ 'resources/css/main.css'])
<x-menu menu="index"/>
<nav id="browser-compatibility-modal" class="reveal browser-compatibility-modal">
    <h3>Browser Compatibility</h3>
    <p class="lead">This project utilizes some of JavaScript's lastest ES6 features. Currently this project is best viewed using the latest version of <a href="https://www.google.com/chrome/browser/desktop/index.html" class="browser-link" target="_blank">Google Chrome</a> or <a href="https://developer.apple.com/safari/download/" target="_blank" class="browser-link">Safari Technology Preview</a>. At a minimum, your browser must support the following ES6 features. If you can't navigate past this page, this project is not compatible with the browser you're using. Sorry, but this project is currently not viewable from a mobile device.</p>
    <ul>
        <li>Classes</li>
        <li>Arrow Functions</li>
    </ul>
    <button class="close-button" data-close aria-label="Close modal" type="button">
        <span aria-hidden="true">&times;</span>
    </button>
    <span>
        <a id="browser-compatibility-got-it" class="button large" data-close="browser-compatibility-modal">Got It</a>
    </span>
    <span>
        <a href="https://kangax.github.io/compat-table/es6/" class="button large es6-feature-link">ES6 feature support</a>
    </span>
</nav>

<main class="container-main">
    <div id="menu" class="menu"></div>
    <div id="moons" class="moons"></div>
    <div id="toggle-effects" class="toggle-effects">
        <div class="control-holder">
            <label for="toggle-orbit-highlight">
                <input type="checkbox" id="toggle-orbit-highlight" class="toggle-control">
                <span>Orbit Color Effects</span>
            </label>
        </div>
    </div>
    <div class="intro-screen">
        <div class="intro-text">
            <div class="intro-heading">
                <h1>Our Solar System</h1>
            </div>
            <div class="inner">
                <div id="render-scene" class="button large render-scene">
                    <span>View Solar System</span>
                </div>
            </div>
            <div id="loading-prompt" class="loading-prompt">
                <span>Building the Solar System...</span>
                <div id="realtime-updates"></div>
                <div id="progress-bar" class="progress" role="progressbar" tabindex="0">
                    <div class="progress-meter"></div>
                </div>
            </div>
        </div>
    </div>
    <div id="solar-system" class="scene"></div>
</main>

<x-footer menu="index"/>
    <script type="text/javascript" href="https://dap.digitalgov.gov/Universal-Federated-Analytics-Min.js?agency=NASA&subagency=EyesOnTheSolarSystem&dclink=true&sp=search,s,q&sdor=false&exts=tif,tiff" defer></script>
    <script type="text/javascript" src="{{asset('src/app/vendor/jquery/dist/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('src/app/vendor/foundation-sites/dist/foundation.js')}}"></script>
    <script type="text/javascript" src="{{asset('src/app/vendor/stats/build/stats.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('src/app/vendor/tweenjs/build/tween.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('src/app/vendor/three.js/three.min.js')}}"></script>
    <script data-main="src/app/app" src="{{asset('src/app/vendor/requirejs/require.js')}}"></script>
@endsection