<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="">
    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('theme/aznews-master/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/aznews-master/assets/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/aznews-master/assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/aznews-master/assets/css/ticker-style.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/aznews-master/assets/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/aznews-master/assets/css/slicknav.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/aznews-master/assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/aznews-master/assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/aznews-master/assets/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/aznews-master/assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/aznews-master/assets/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/aznews-master/assets/css/style.css') }}">
    <!-- Styles -->
    @stack('css')
    @livewireStyles
    <livewire:s-e-o-header/>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-1B8VPMXEZJ"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-1B8VPMXEZJ');
    </script>

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-56PLK8F');</script>
    <!-- End Google Tag Manager -->
</head>
<body>
<!-- Preloader Start -->
<!-- <div id="preloader-active">
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-inner position-relative">
            <div class="preloader-circle"></div>
            <div class="preloader-img pere-text">
                <img src="assets/img/logo/logo.png" alt="">
            </div>
        </div>
    </div>
</div> -->
<!-- Preloader Start -->

<header>
    <!-- Header Start -->
    <div class="header-area">
        <div class="main-header ">
            <div class="header-top black-bg d-none d-md-block">
                <div class="container">
                    <div class="col-xl-12">
                        <div class="row d-flex justify-content-between align-items-center">
                            <div class="header-info-left" x-data="timeTemp" x-init="initialize()">
                                <ul>
                                    {{--                                    <li><i class="fa fa-thermometer-empty"></i> 34ºc, Sunny</li>--}}
                                    <li><i class="fas fa-clock"></i> <span x-text="time"></span></li>
                                </ul>
                            </div>
                            <div class="header-info-right">
                                <ul class="header-social">
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-mid d-none d-md-block">
                <div class="container">
                    <div class="row d-flex align-items-center">
                        <!-- Logo -->
                        <div class="col-xl-3 col-lg-3 col-md-3">
                            <div class="logo">
                                <a href="/"><img src="{{ asset('images/logo.png') }}" alt="" class="img-fluid"
                                                 style="max-width: 140px"></a>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-9 col-md-9">
                            <div class="header-banner f-right ">
                                {{---- ADS ----}}
                                {{--                                <img src="{{ asset('theme/aznews-master/assets/img/hero/header_card.jpg') }}" alt="">--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-bottom header-sticky">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-10 col-lg-10 col-md-12 header-flex">
                            <!-- sticky -->
                            <div class="sticky-logo">
                                <a href="index.html"><img src="assets/img/logo/logo.png" alt=""></a>
                            </div>
                            <!-- Main-menu -->
                            <div class="main-menu d-none d-md-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a href="/">Home</a></li>
                                        <li><a href="{{ route('home.blog') }}">Blog</a></li>
                                        <li><a href="{{ route('home.about') }}">About</a></li>
                                        {{--                                        <li><a href="latest_news.html">Latest News</a></li>--}}
                                        {{--                                        <li><a href="contact.html">Contact</a></li>--}}
                                        {{--                                        <li><a href="#">Pages</a>--}}
                                        {{--                                            <ul class="submenu">--}}
                                        {{--                                                <li><a href="elements.html">Element</a></li>--}}
                                        {{--                                                <li><a href="blog.html">Blog</a></li>--}}
                                        {{--                                                <li><a href="single-blog.html">Blog Details</a></li>--}}
                                        {{--                                                <li><a href="details.html">Categori Details</a></li>--}}
                                        {{--                                            </ul>--}}
                                        {{--                                        </li>--}}
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-4">
                            <div class="header-right-btn f-right d-none d-lg-block">
                                {{--                                <i class="fas fa-search special-tag"></i>--}}
                                {{--                                <div class="search-box">--}}
                                {{--                                    <form action="#">--}}
                                {{--                                        <input type="text" placeholder="Search">--}}
                                {{--                                    </form>--}}
                                {{--                                </div>--}}
                            </div>
                        </div>
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-md-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
</header>


{{ $slot }}

<footer>
    <!-- Footer Start-->
    <div class="footer-area footer-padding fix">
        <div class="container">
            <div class="row d-flex justify-content-between">
                <div class="col-xl-5 col-lg-5 col-md-7 col-sm-12">
                    <div class="single-footer-caption">
                        <div class="single-footer-caption">
                            <!-- logo -->
                            <div class="footer-logo">
                                <a href="index.html"><img src="assets/img/logo/logo2_footer.png" alt=""></a>
                            </div>
                            <div class="footer-tittle">
                                <div class="footer-pera">
                                    <p> All the way tayo mga ka-MaSa!✌️👊
                                        President Bongbong Marcos and Vice President Mayor Inday Sara Duterte para "The
                                        Philippines will be great again!"🇵🇭❤️💚
                                        Wag bibitaw at bantayan ang boto!
                                        #PBBM #VPSara</p>
                                </div>
                            </div>
                            <!-- social -->
                            <div class="footer-social">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4  col-sm-6">
                    <div class="single-footer-caption mt-60">
                        <div class="footer-tittle">
                            <h4>Newsletter</h4>
                            <p>You may provide your e-mail below. You will be updated everytime we post.</p>
                            <!-- Form -->
                            <div class="footer-form">
                                <div id="mc_embed_signup">
                                    <form target="_blank"
                                          action="{{ route('newsletter') }}"
                                          method="post" class="subscribe_form relative mail_part">
                                        @csrf
                                        <input type="email" name="email" id="newsletter-form-email"
                                               placeholder="Email Address"
                                               class="placeholder hide-on-focus" onfocus="this.placeholder = ''"
                                               onblur="this.placeholder = ' Email Address '">
                                        <div class="form-icon">
                                            <button type="submit" name="submit" id="newsletter-submit"
                                                    class="email_icon newsletter-submit button-contactForm">
                                                <img
                                                    src="{{ asset('theme/aznews-master/assets/img/logo/form-iocn.png') }}"
                                                    alt=""></button>
                                        </div>
                                        <div class="mt-10 info"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-5 col-sm-6">
                    <div class="single-footer-caption mb-50 mt-60">
                        <div class="footer-tittle">

                        </div>
                        <div class="instagram-gellay">
                            <ul class="insta-feed">
                                <li><a href="#"><img src="assets/img/post/instra1.jpg" alt=""></a></li>
                                <li><a href="#"><img src="assets/img/post/instra2.jpg" alt=""></a></li>
                                <li><a href="#"><img src="assets/img/post/instra3.jpg" alt=""></a></li>
                                <li><a href="#"><img src="assets/img/post/instra4.jpg" alt=""></a></li>
                                <li><a href="#"><img src="assets/img/post/instra5.jpg" alt=""></a></li>
                                <li><a href="#"><img src="assets/img/post/instra6.jpg" alt=""></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer-bottom aera -->
    <div class="footer-bottom-area">
        <div class="container">
            <div class="footer-border">
                <div class="row d-flex align-items-center justify-content-between">
                    <div class="col-lg-6">
                        <div class="footer-copy-right">
                            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;<script>document.write(new Date().getFullYear());</script>
                                All rights reserved | Yaramay Maintenance Services
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="footer-menu f-right">
                            <ul>
                                <li><a href="#">Terms of use</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End-->
</footer>
@livewireScripts
<!-- JS here -->
<!-- All JS Custom Plugins Link Here here -->
<script src="{{ asset('theme/aznews-master/assets/js/vendor/modernizr-3.5.0.min.js') }}"></script>
<!-- Jquery, Popper, Bootstrap -->
<script src="{{ asset('theme/aznews-master/assets/js/vendor/jquery-1.12.4.min.js') }}"></script>
<script src="{{ asset('theme/aznews-master/assets/js/popper.min.js') }}"></script>
<!-- Jquery Mobile Menu -->
<script src="{{ asset('theme/aznews-master/assets/css/slicknav.css') }}"></script>
<!-- Jquery Slick , Owl-Carousel Plugins -->
<script src="{{ asset('theme/aznews-master/assets/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('theme/aznews-master/assets/js/slick.min.js') }}"></script>
<!-- Date Picker -->
<script src="{{ asset('theme/aznews-master/assets/js/gijgo.min.js') }}"></script>
<!-- One Page, Animated-HeadLin -->
<script src="{{ asset('theme/aznews-master/assets/js/wow.min.js') }}"></script>
<script src="{{ asset('theme/aznews-master/assets/js/animated.headline.js') }}"></script>
<script src="{{ asset('theme/aznews-master/assets/js/jquery.magnific-popup.js') }}"></script>
<!-- Breaking New Pluging -->
<script src="{{ asset('theme/aznews-master/assets/js/jquery.ticker.js') }}"></script>
<script src="{{ asset('theme/aznews-master/assets/js/site.js') }}"></script>
<!-- Scrollup, nice-select, sticky -->
<script src="{{ asset('theme/aznews-master/assets/js/jquery.scrollUp.min.js') }}"></script>
<script src="{{ asset('theme/aznews-master/assets/js/jquery.nice-select.min.js') }}"></script>
<script src="{{ asset('theme/aznews-master/assets/js/jquery.sticky.js') }}"></script>
<!-- Jquery Plugins, main Jquery -->
<script src="{{ asset('theme/aznews-master/assets/js/plugins.js') }}"></script>
<script src="{{ asset('theme/aznews-master/assets/js/main.js') }}"></script>
<script src="{{ asset('theme/aznews-master/assets/js/bootstrap.min.js') }}"></script>

<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
<script>

    document.addEventListener('alpine:init', () => {
        Alpine.data('timeTemp', () => ({
            open: true,
            time: null,
            initialize() {
                setInterval(() => {
                    this.clockTower();
                }, 1000);
            },
            clockTower() {
                var today = new Date();
                var day = today.getDay();
                var dated = today.getDate();
                var daylist = ["Sunday", "Monday", "Tuesday", "Wednesday ", "Thursday", "Friday", "Saturday"];
                var hour = today.getHours();
                var minute = today.getMinutes();
                var second = today.getSeconds();
                var prepand = (hour >= 12) ? " PM " : " AM ";
                hour = (hour >= 12) ? hour - 12 : hour;
                if (hour === 0 && prepand === ' PM ') {
                    if (minute === 0 && second === 0) {
                        hour = 12;
                        prepand = ' Noon';
                    } else {
                        hour = 12;
                        prepand = ' PM';
                    }
                }
                if (hour === 0 && prepand === ' AM ') {
                    if (minute === 0 && second === 0) {
                        hour = 12;
                        prepand = ' Midnight';
                    } else {
                        hour = 12;
                        prepand = ' AM';
                    }
                }

                this.time = daylist[day] + ", " + dated + ", " + hour + ":" + minute + ":" + second + prepand;
            }
        }))
    });
</script>
</body>
</html>
