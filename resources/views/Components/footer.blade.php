@if($menu == 'index')
    <footer class="footer" style="background: none">
        <div class="footer__addr">
            <section>
                <a href="/"><img src="{{asset('image/logo-long.png')}}" alt="#"></a>
            </section>

        </div>
        <ul class="footer__nav">
            <li class="nav__item">
                <h2 class="nav__title">Media</h2>

                <ul class="nav__ul">
                    <li>
                    <span><i class="fas fa-home"></i></span><span>Astronomy VN LLC, 35/6 D5 Street, Ward 25, Binh Thanh District, Ho Chi Minh City</span>
                    </li>
                    <li>
                    <span><i class="fas fa-envelope"></i></span><span> Astronomy@gmail.com</span>
                    </li>
                    <li>
                    <span><i class="fas fa-phone"></i></span><span> +84 949 258 999</span>
                    </li>
                </ul>
            </li>
            
            <li class="nav__item nav__item--extra">
                <h2 class="nav__title">About company</h2>
                <ul class="nav__ul nav__ul--extra">
                <li>The website is provide user friendly environment and navigation. The website provide brief details about few facts and details about astronomy.</li>
                    <li>Astronomy is the study of the sun, moon, stars, planets, comets, gas, dust and other non-Earthly bodies and phenomena.</li>
                </ul>
            </li>
            
            <li class="nav__item">
                <h2 class="nav__title">Legal</h2>       
                <ul class="nav__ul">
                    <li><a href="contact">About Us</a></li>
                </ul>
            </li>
        </ul>
    </footer>
@else
    <footer class="footer">
        <div class="footer__addr">
            <section>
                <a href="/"><img src="{{asset('image/logo-long.png')}}" alt="#"></a>
            </section>

        </div>
        <ul class="footer__nav">
            <li class="nav__item">
                <h2 class="nav__title">Media</h2>

                <ul class="nav__ul">
                    <li>
                    <span><i class="fas fa-home"></i></span><span>&nbsp&nbspAstronomy VN LLC, 35/6 D5 Street, Ward 25, Binh Thanh District, Ho Chi Minh City</span>
                    </li>
                    <li>
                    <span><i class="fas fa-envelope"></i></span><span>&nbsp&nbspAstronomy@gmail.com</span>
                    </li>
                    <li>
                    <span><i class="fas fa-phone"></i></span><span>&nbsp&nbsp+84 949 258 999</span>
                    </li>
                </ul>
            </li>
            
            <li class="nav__item nav__item--extra">
                <h2 class="nav__title">About company</h2>
                <ul class="nav__ul nav__ul--extra">
                    <li>The website is provide user friendly environment and navigation. The website provide brief details about few facts and details about astronomy.</li>
                    <li>Astronomy is the study of the sun, moon, stars, planets, comets, gas, dust and other non-Earthly bodies and phenomena.</li>
                </ul>
            </li>
            
            <li class="nav__item">
                <h2 class="nav__title">Legal</h2>       
                <ul class="nav__ul">
                    <li><a href="/about">About Us</a></li>
                </ul>
            </li>
        </ul>
    </footer>
@endif
