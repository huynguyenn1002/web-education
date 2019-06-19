@include('layouts.header')
<!-- Page Preloder -->
<div id="preloder">
    <div class="loader"></div>
</div>

<!-- header section -->
<header class="header-section">
    <div class="container">
        <!-- logo -->
        <a href="{{ route('welcome') }}" class="site-logo">Stuty With Me</a>
        @if (Route::has('login'))
            @auth
                <a href="#" f class="login">
                    {{ Auth::user()->name }}
                </a>


                <a class="sign-up" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>

            @else
                <a href="{{ route('login') }}" class="login">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="sign-up">Register</a>
                @endif
            @endauth
        @endif
        <div class="nav-switch">
            <i class="fa fa-bars"></i>
        </div>
    </div>
</header>
<!-- header section end-->

<!-- Header section  -->
<nav class="nav-section">
    <div class="container">
        <div class="nav-right">
            <a href=""><i class="fa fa-search"></i></a>
            <a href=""><i class="fa fa-shopping-cart"></i></a>
        </div>
        <ul class="main-menu">
            <li class="active"><a href="{{ route('welcome') }}">Home</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Event</a></li>
            <li><a href="{{ route('teacher.course.index') }}">COURSES</a></li>
            <li><a href="#">blog</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </div>
</nav>
<!-- Header section end -->
<div class="content">
    @yield('content')
</div>


<!-- Footer section -->
<footer class="footer-section">
    <div class="container footer-top">
        <div class="row">
            <!-- widget -->
            <div class="col-sm-6 col-lg-3 footer-widget">
                <div class="about-widget">
                    <img src="img/logo-light.png" alt="">
                    <p>orem ipsum dolor sit amet, consecter adipiscing elite. Donec minos varius, viverra justo ut,
                        aliquet nisl.</p>
                    <div class="social pt-1">
                        <a href=""><i class="fa fa-twitter-square"></i></a>
                        <a href=""><i class="fa fa-facebook-square"></i></a>
                        <a href=""><i class="fa fa-google-plus-square"></i></a>
                        <a href=""><i class="fa fa-linkedin-square"></i></a>
                        <a href=""><i class="fa fa-rss-square"></i></a>
                    </div>
                </div>
            </div>
            <!-- widget -->
            <div class="col-sm-6 col-lg-3 footer-widget">
                <h6 class="fw-title">USEFUL LINK</h6>
                <div class="dobule-link">
                    <ul>
                        <li><a href="">Home</a></li>
                        <li><a href="">About us</a></li>
                        <li><a href="">Services</a></li>
                        <li><a href="">Events</a></li>
                        <li><a href="">Features</a></li>
                    </ul>
                    <ul>
                        <li><a href="">Policy</a></li>
                        <li><a href="">Term</a></li>
                        <li><a href="">Help</a></li>
                        <li><a href="">FAQs</a></li>
                        <li><a href="">Site map</a></li>
                    </ul>
                </div>
            </div>
            <!-- widget -->
            <div class="col-sm-6 col-lg-3 footer-widget">
                <h6 class="fw-title">RECENT POST</h6>
                <ul class="recent-post">
                    <li>
                        <p>Snackable study:How to break <br> up your master's degree</p>
                        <span><i class="fa fa-clock-o"></i>24 Mar 2018</span>
                    </li>
                    <li>
                        <p>Open University plans major <br> cuts to number of staff</p>
                        <span><i class="fa fa-clock-o"></i>24 Mar 2018</span>
                    </li>
                </ul>
            </div>
            <!-- widget -->
            <div class="col-sm-6 col-lg-3 footer-widget">
                <h6 class="fw-title">CONTACT</h6>
                <ul class="contact">
                    <li><p><i class="fa fa-map-marker"></i> 40 Baria Street 133/2, NewYork City,US</p></li>
                    <li><p><i class="fa fa-phone"></i> (+88) 111 555 666</p></li>
                    <li><p><i class="fa fa-envelope"></i> infodeercreative@gmail.com</p></li>
                    <li><p><i class="fa fa-clock-o"></i> Monday - Friday, 08:00AM - 06:00 PM</p></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- copyright -->
    <div class="copyright">
        <div class="container">
            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;<script>document.write(new Date().getFullYear());</script>
                All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a
                        href="https://colorlib.com" target="_blank">Colorlib</a>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
        </div>
    </div>
</footer>
<!-- Footer section end-->

@yield('script')
@include('layouts.footer')