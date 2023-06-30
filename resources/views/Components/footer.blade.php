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
                    <span><i class="fas fa-home"></i></span><span> 35/6 Đường D5, Phường 25, Bình Thạnh, Thành phố Hồ Chí Minh 72308, Việt Nam</span>
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
                    <li>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti.</li>
                    <li>Blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias.</li>
                    <li>
                        <!-- Facebook -->
                        <a type="button" ><i class="fab fa-facebook-f"></i></a>
                        <!-- Dribbble -->
                        <a type="button" ><i class="fab fa-dribbble"></i></a>
                        <!-- Twitter -->
                        <a type="button" ><i class="fab fa-twitter"></i></a>
                        <!-- Google + -->
                        <a type="button" ><i class="fab fa-google-plus-g"></i></a>
                        <!-- Linkedin -->
                    </li>
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
                    <span><i class="fas fa-home"></i></span><span> 35/6 Đường D5, Phường 25, Bình Thạnh, Thành phố Hồ Chí Minh 72308, Việt Nam</span>
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
                    <li>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti.</li>
                    <li>Blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias.</li>
                    <li>
                        <!-- Facebook -->
                        <a type="button" ><i class="fab fa-facebook-f"></i></a>
                        <!-- Dribbble -->
                        <a type="button" ><i class="fab fa-dribbble"></i></a>
                        <!-- Twitter -->
                        <a type="button" ><i class="fab fa-twitter"></i></a>
                        <!-- Google + -->
                        <a type="button" ><i class="fab fa-google-plus-g"></i></a>
                        <!-- Linkedin -->
                    </li>
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
@endif
