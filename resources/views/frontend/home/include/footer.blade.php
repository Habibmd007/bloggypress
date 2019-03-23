<!-- Instagram Photos Start -->
<section class="section">
    <!-- Instagram Items Start -->
    <div class="instagram--items">
        <!-- Instagram Profile Start -->
        <div class="instagram--profile ff--primary">
            <a href="#" target="_blank">Follow Us @ Instagram</a>
        </div>
        <!-- Instagram Profile End -->

        <!-- Owl Carousel Start -->
        <div class="owl-carousel" data-owl-center="true" data-owl-responsive='{"0": {"autoWidth": true}}' data-trigger="gallery_popup">
            
            
            <div class="instagram--item">
                <a href="{{asset('/')}}img/instagram-img/01.jpg">
                    <img src="{{asset('/')}}img/instagram-img/01.jpg" alt="">
                </a>
            </div>
            

            
            <div class="instagram--item">
                <a href="{{asset('/')}}img/instagram-img/02.jpg">
                    <img src="{{asset('/')}}img/instagram-img/02.jpg" alt="">
                </a>
            </div>
            

            
            <div class="instagram--item">
                <a href="{{asset('/')}}img/instagram-img/03.jpg">
                    <img src="{{asset('/')}}img/instagram-img/03.jpg" alt="">
                </a>
            </div>
            

            
            <div class="instagram--item">
                <a href="{{asset('/')}}img/instagram-img/04.jpg">
                    <img src="{{asset('/')}}img/instagram-img/04.jpg" alt="">
                </a>
            </div>
            

            
            <div class="instagram--item">
                <a href="{{asset('/')}}img/instagram-img/05.jpg">
                    <img src="{{asset('/')}}img/instagram-img/05.jpg" alt="">
                </a>
            </div>
            

            
            <div class="instagram--item">
                <a href="{{asset('/')}}img/instagram-img/06.jpg">
                    <img src="{{asset('/')}}img/instagram-img/06.jpg" alt="">
                </a>
            </div>
            

            
            <div class="instagram--item">
                <a href="{{asset('/')}}img/instagram-img/07.jpg">
                    <img src="{{asset('/')}}img/instagram-img/07.jpg" alt="">
                </a>
            </div>
            

            
            <div class="instagram--item">
                <a href="{{asset('/')}}img/instagram-img/08.jpg">
                    <img src="{{asset('/')}}img/instagram-img/08.jpg" alt="">
                </a>
            </div>
            
        </div>
        <!-- Owl Carousel End -->
    </div>
    <!-- Instagram Items End -->
</section>
<!-- Instagram Photos End -->

<!-- Subscribe Section Start -->
<section class="section pt--60 pb--60">
    <div class="container">
        <!-- Subscribe Form Start -->
        <div class="subscribe--form text-center">
            <h2 class="h5 text-primary">Subscribe For My Newsletter</h2>

            <form action="{{route('subscribe')}}" method="post" name="mc-embedded-subscribe-form"  data-form="validate">
                @csrf
                <div class="input-group">
                    <input type="email" name="user_email" placeholder="Your Email" id="exampleInputEmail" class="form-control" required>

                    <div class="input-group-btn">
                        <button type="submit" class="btn btn-primary">Subscribe Now</button>
                    </div>
                </div>
            </form>
       
        </div>
        <!-- Subscribe Form End -->
    </div>
</section>
<!-- Subscribe Section End -->

<!-- Footer Section Start -->
<footer class="footer--section" data-trigger="footer-reveal">
    <!-- Footer Topbar Start -->
    <div class="footer--topbar text-center pt--50 pb--50">
        <div class="container">
            <!-- Back To Top Button Start -->
            <div class="back-to-top-btn">
                <a href="#">Back To Top<i class="fa fa-chevron-up"></i></a>
            </div>
            <!-- Back To Top Button End -->





            







            <!-- Social Start -->
            <div class="social">
                <ul class="nav">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                </ul>
            </div>
            <!-- Social End -->




            <div class="footer--copyright text-center">
                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                               <i class="fa fa-user" aria-hidden="true"></i> {{ Auth::user()->name }} <span class="caret"></span>
                            </a>
      
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
      
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
              </div>







        </div>
    </div>
    <!-- Footer Topbar End -->

    <!-- Footer Copyright Start -->
    <div class="footer--copyright text-center">
        <div class="container">
            <p>Copyright &copy; <a href="#">ThemeBlogs</a>. All Rights Reserved.</p>
        </div>
    </div>
    <!-- Footer Copyright End -->
</footer>
<!-- Footer Section End -->
</div>
<!-- Wrapper End -->

<!-- ==== jQuery Library ==== -->
<script src="{{asset('/')}}js/jquery-3.2.1.min.js"></script>

<!-- ==== Bootstrap Framework ==== -->
<script src="{{asset('/')}}js/bootstrap.min.js"></script>

<!-- ==== Owl Carousel Plugin ==== -->
<script src="{{asset('/')}}js/owl.carousel.min.js"></script>

<!-- ==== Magnific Popup Plugin ==== -->
<script src="{{asset('/')}}js/jquery.magnific-popup.min.js"></script>

<!-- ==== Validation Plugin ==== -->
<script src="{{asset('/')}}js/jquery.validate.min.js"></script>

<!-- ==== Match Height Plugin ==== -->
<script src="{{asset('/')}}js/jquery.matchHeight-min.js"></script>

<!-- ==== Isotope Plugin ==== -->
<script src="{{asset('/')}}js/isotope.min.js"></script>

<!-- ==== Footer Reveal Plugin ==== -->
<script src="{{asset('/')}}js/footer-reveal.min.js"></script>

<!-- ==== Retina Plugin ==== -->
<script src="{{asset('/')}}js/retina.min.js"></script>

<!-- ==== Main Script ==== -->
<script src="{{asset('/')}}js/main.js"></script>

<!-- ==== Color Switcher Script ==== -->
<script src="{{asset('/')}}js/color-switcher.min.js"></script>

</body>
</html>