@if($menu == 'index')
    <header class ="menubackground" style="background: none">
        <section>
            <a href="/"><img src="{{asset('image/logo-long.png')}}" alt="#"></a>
        </section>
        <section>
            <nav>
                <ul>
                    <li @class(['activeli' => $menu == 'index'])><a @class(['active1' => $menu == 'index']) href="/home">HOME</a></li>
                    <li @class(['activeli' => $menu == 'astronomy'])>
                        <div class='dropdownmenu'>
                            <a @class(['activeli' => $menu == 'astronomy']) href="javascript:void(0)">ASTRONOMY</a>
                            <div class="content">
                                <a href="/planet">PLANET</a>
                                <a href="/constellation">CONSTELLATION</a>
                            </div>
                        </div>
                    </li>
                    <li @class(['activeli' => $menu == 'observatory'])><a @class(['active1' => $menu == 'observatory']) href="/observatory">OBSERVATORY</a></li>
                    <li @class(['activeli' => $menu == 'blog'])><a @class(['active1' => $menu == 'blog']) href="/blog">BLOG</a></li>
                    <li @class(['activeli' => $menu == 'about'])><a @class(['active1' => $menu == 'about']) href="/about">ABOUT US</a></li>
                </ul>
            </nav>
        </section>
        @if (session()->has('username1'))
            @include('Components.signout',['avt'=>$avt])
            @else
                @include('Components.signin')
        @endif
    </header>
@else
    <header class ="menubackground">
        <section>
            <a href="/"><img src="{{asset('image/logo-long.png')}}" alt="#"></a>
        </section>
        <section>
            <nav>
                <ul>
                    <li @class(['activeli' => $menu == 'index'])><a @class(['active1' => $menu == 'index']) href="/home">HOME</a></li>
                    <li @class(['activeli' => $menu == 'astronomy'])>
                        <div class='dropdownmenu'>
                            <a @class(['activeli' => $menu == 'astronomy']) href="javascript:void(0)">ASTRONOMY</a>
                            <div class="content">
                                <a href="/planet">PLANET</a>
                                <a href="/constellation">CONSTELLATION</a>
                            </div>
                        </div>
                    </li>
                    <li @class(['activeli' => $menu == 'observatory'])><a @class(['active1' => $menu == 'observatory']) href="/observatory">OBSERVATORY</a></li>
                    <li @class(['activeli' => $menu == 'blog'])><a @class(['active1' => $menu == 'blog']) href="/blog">BLOG</a></li>
                    <li @class(['activeli' => $menu == 'about'])><a @class(['active1' => $menu == 'about']) href="/about">ABOUT US</a></li>
                </ul>
            </nav>
        </section>
        @if (session()->has('username1'))
            @include('Components.signout',['avt'=>$avt])
            @else
                @include('Components.signin')
        @endif
    </header>
@endif
