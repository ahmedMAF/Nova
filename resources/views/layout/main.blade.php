<!DOCTYPE html>
<!-- saved from url=(0024)https://auratechs.com/en -->
<html lang="{{ app()->getLocale() }}" dir="{{ __('app.dir') }}" class="theme-light">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <!-- Required meta tags -->

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Links of CSS files -->
    <link rel="stylesheet" href="{{asset('css/aos.css')}}" />
    <link rel="stylesheet" href="{{asset('css/animate.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/meanmenu.css')}}" />
    <link rel="stylesheet" href="{{asset('fonts/remixicon.css')}}" />
    <link rel="stylesheet" href="{{asset('css/odometer.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/magnific-popup.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/fancybox.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/nice-select.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/toastr.min.css')}}" />
    @if (app()->getLocale() == 'ar')
        <link rel="stylesheet" href="{{asset('css/ar-style.css')}}" />
        <link rel="stylesheet" href="{{asset('css/ar.css')}}" />
    @else
        <link rel="stylesheet" href="{{asset('css/style.css')}}" />
    @endif
    <link rel="stylesheet" href="{{asset('css/navbar.css')}}" />
    <link rel="stylesheet" href="{{asset('css/footer.css')}}" />
    <link rel="stylesheet" href="{{asset('css/dark.css')}}" />
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}" />


    <title>@yield('title')</title>
</head>

<body data-aos-easing="ease" data-aos-duration="400" data-aos-delay="0">
    <!-- Start Preloader Area -->
    <div class="preloader" style="display: none;">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="lds-spinner">
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Preloader Area -->
    <header class="main-header-area">
        <!-- Start Navbar Area -->
        <div class="navbar-area">
            <div class="main-responsive-nav">
                <div class="container">
                    <div class="main-responsive-menu">
                        <div class="logo">
                            <a href="{{route('home')}}">
                                <img style="height: 60px" src="{{asset('image/nova.jpeg')}}" alt="image" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="main-navbar">
                <div class="container-fluid">
                    <nav class="navbar navbar-expand-md navbar-light">
                        <a class="navbar-brand" href="{{route('home')}}">
                            <img style="height: 70px" src="{{asset('image/nova.jpeg')}}" alt="image" />
                        </a>

                        <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent"
                            style="display: block">
                            <ul class="navbar-nav ms-auto nav-ul-ar">
                                <li class="nav-item">
                                    <a href="{{route('home')}}" class="nav-link">{{ __('main.home') }}</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('about')}}" class="nav-link">{{ __('main.about') }}</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('services')}}" class="nav-link">{{ __('main.services') }}</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('team')}}" class="nav-link">{{ __('main.team') }}</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('projects')}}" class="nav-link">{{ __('main.projects') }}</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('contact')}}" class="nav-link">{{ __('main.contact') }}</a>
                                </li>
                                @if (session('is_admin'))
                                    <li class="nav-item">
                                        <a href="{{route('admin')}}" class="nav-link">{{ __('main.admin') }}</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{route('logout')}}" class="nav-link">{{ __('main.logout') }}</a>
                                    </li>
                                @endif
                                <li class="nav-item">
                                    <a href="{{route('change_language')}}" class="nav-link">
                                        <i style="font-size: 18px;" class="ri-global-line"></i>
                                        <span class="language-text">{{ __('main.enar') }}</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>

            <div class="others-option-for-responsive">
                <div class="container">
                    <div class="container">
                        <div class="option-inner">
                            <div class="others-options d-flex align-items-center">
                                <div class="option-item">
                                    <i class="search-btn ri-search-line"></i>
                                    <i class="close-btn ri-close-line"></i>
                                    <div class="search-overlay search-popup">
                                        <div class="search-box">
                                            <form class="search-form">
                                                <input class="search-input" placeholder="Search..." type="text" />

                                                <button class="search-button" type="submit">
                                                    <i class="ri-search-line"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <div class="option-item">
                                    <div class="side-menu-btn">
                                        <i class="ri-bar-chart-horizontal-line" data-bs-toggle="modal"
                                            data-bs-target="#sidebarModal"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Navbar Area -->
    </header>

    @yield('content')

    <!-- start Footer Area -->
    <footer class="footer-area with-black-background pt-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-3 col-md-6">
                    <div class="single-footer-widget aos-init" data-aos="fade-up" data-aos-delay="50"
                        data-aos-duration="500" data-aos-once="true">
                        <div class="widget-logo">
                            <a style="width: 130px" href="{{route('home')}}"><img src="{{asset('image/nova.jpeg')}}" alt="image" /></a>
                        </div>
                        <p>
                            <font color="#ffffff">&nbsp; &nbsp;</font>
                        </p>

                        <ul class="widget-social">
                            <li>
                                <a href="https://www.facebook.com/share/1A4Wj75TTP/" target="_blank">
                                    <i class="ri-facebook-fill"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.facebook.com/share/1A4Wj75TTP/" target="_blank">
                                    <i class="ri-twitter-fill"></i>
                                </a>
                            </li>

                            <li>
                                <a href="https://www.youtube.com/@ahmedmsafana" target="_blank">
                                    <i class="ri-youtube-fill"></i>
                                </a>
                            </li>

                            <li>
                                <a href="https://www.youtube.com/@ahmedmsafana" target="_blank">
                                    <i class="ri-vimeo-fill"></i>
                                </a>
                            </li>

                            <li>
                                <a href="https://www.facebook.com/share/1A4Wj75TTP/" target="_blank">
                                    <i class="ri-instagram-line"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="single-footer-widget ps-5 aos-init" data-aos="fade-up" data-aos-delay="60"
                        data-aos-duration="600" data-aos-once="true">
                        <h3>{{ __('main.links') }}</h3>

                        <ul class="quick-links">
                            <li><a href="{{route('home')}}">{{ __('main.home') }}</a></li>
                            <li><a href="{{route('about')}}">{{ __('main.about') }}</a></li>
                            <li>
                                <a href="{{route('services')}}">{{ __('main.services') }}</a>
                            </li>
                            <li><a href="{{route('team')}}">{{ __('main.team') }}</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="single-footer-widget ps-5 aos-init" data-aos="fade-up" data-aos-delay="70"
                        data-aos-duration="700" data-aos-once="true">
                        <h3>{{ __('main.pages') }}</h3>

                        <ul class="quick-links">
                            <li>
                                <a href="{{route('projects')}}">{{ __('main.projects') }}</a>
                            </li>
                            <li><a href="{{route('contact')}}">{{ __('main.contact') }}</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="copyright-area">
            <div class="container">
                <div class="copyright-area-content">
                    <p>
                        Copyright @

                        <script>
                            document.write(new Date().getFullYear());
                        </script>
                        Created by NOVA
                    </p>
                </div>
            </div>
        </div>
        <div class="footer-shape-1">
            <img src="{{{asset('image/slides-shape-2.png')}}}" alt="image" />
        </div>
        <div class="footer-shape-2">
            <img src="{{asset('image/slides-shape-3.png')}}" alt="image" />
        </div>
        <div class="footer-shape-3">
            <img src="{{asset('image/footer-shape-3.png')}}" alt="image" />
        </div>
    </footer>
    <!-- End Footer Area -->

    <!-- Start Go Top Area -->
    <div class="go-top">
        <i class="ri-arrow-up-s-line"></i>
    </div>
    <!-- End Go Top Area -->

    <!-- Links of JS files -->
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('js/jquery.meanmenu.js')}}"></script>
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/jquery.appear.js')}}"></script>
    <script src="{{asset('js/odometer.min.js')}}"></script>
    <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('js/fancybox.min.js')}}"></script>
    <script src="{{asset('js/tweenmax.min.js')}}"></script>
    <script src="{{asset('js/ScrollMagic.min.js')}}"></script>
    <script src="{{asset('js/animation.gsap.min.js')}}"></script>
    <script src="{{asset('js/debug.addIndicators.min.js')}}"></script>
    <script src="{{asset('js/mixitup.min.js')}}"></script>
    <script src="{{asset('js/nice-select.min.js')}}"></script>
    <script src="{{asset('js/tilt.jquery.min.js')}}"></script>
    <script src="{{asset('js/parallax.min.js')}}"></script>
    <script src="{{asset('js/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{asset('js/form-validator.min.js')}}"></script>
    <script src="{{asset('js/contact-form-script.js')}}"></script>
    <script src="{{asset('js/aos.js')}}"></script>
    <script src="{{asset('js/wow.min.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
    <div class="switch-box"><label id="switch" class="switch"><input type="checkbox" onchange="toggleTheme()"
                id="slider"><span class="slider round"></span></label></div>
    <script src="{{asset('js/toastr.min.js')}}"></script>
    <script></script>

    @yield('scripts')
</body>

</html>