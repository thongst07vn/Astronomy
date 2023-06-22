
<header class ="menubackground">
    <section>
        <a href="/"><img src="image/logo-long.png" alt="#"></a>
    </section>
    <section>
        <nav>
            <ul>
                <li @class(['activeli' => $menu == 'index'])><a @class(['active1' => $menu == 'index']) href="home">HOME</a></li>
                <li><a href="planet">PLANET</a></li>
                <li><a href="constellation">CONSTELLATION</a></li>
                <li @class(['activeli' => $menu == 'blog'])><a @class(['active1' => $menu == 'blog']) href="blog">BLOG</a></li>
                <li @class(['activeli' => $menu == 'about'])><a @class(['active1' => $menu == 'index']) href="about">ABOUT US</a></li>
            </ul>
        </nav>
    </section>
    @if (session()->has('username1'))
        @include('Components.signout')
        @else
            @include('Components.signin')
    @endif
</header>
