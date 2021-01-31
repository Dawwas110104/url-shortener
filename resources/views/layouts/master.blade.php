<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>urlShortenerApp</title>
        <!-- CSS only -->
        <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous"> -->
        <link rel="stylesheet" href="{{ asset('mesocial/assets/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('mesocial/assets/css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('mesocial/assets/css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('mesocial/assets/css/modal-video.min.css') }}">
        <link rel="stylesheet" href="{{ asset('mesocial/assets/css/animate.css') }}">
        <link rel="stylesheet" href="{{ asset('mesocial/assets/css/normalize.css') }}">
        <link rel="stylesheet" href="{{ asset('mesocial/style.css') }}">
        <link rel="stylesheet" href="{{ asset('mesocial/assets/css/responsive.css') }}">

        <script src="{{ asset('mesocial/assets/js/jquery.3.2.1.min.js') }}"></script>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
    </head>
    <body>
        <div id="home" class="feature-page header-area">
            <div class="container">
                <div class="header-top">
                    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
                        <div class="collapse navbar-collapse my-2 my-lg-0" id="navbarSupportedContent">
                            <div class="mainmenu">
                                <ul class="navbar-nav ml-auto">
                                    @if (Route::has('login'))
                                        <li class="nav-item">
                                            <div class="top-right links">
                                                @auth
                                                    <li class="nav-item">
                                                        <a href="{{ route('home') }}">Dashboard</a>
                                                    </li>
                                                @else
                                                    <li class="nav-item">
                                                        <a href="{{ route('login') }}">Login</a>
                                                    </li>
                                                    @if (Route::has('register'))
                                                        <li class="nav-item">
                                                            <a href="{{ route('register') }}">Register</a>
                                                        </li>
                                                    @endif
                                                @endauth
                                            </div>

                                        </li>

                                    @endif
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-6 text-center">
                        <div class="hero-text-wrapper">
                            <div class="hero-text-inner">
                                <div class="hero-text">
                                    <h6>WELCOME TO</h6>
                                    <h1>URL SHORTENER</h1>
                                    <br><br><br>
                                    <div class="row">
                                        @yield('action')
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <!-- Powerful Features
======================================-->
    <div id="features" class="features-area scroll-section">
        <div class="container">
            <div class="row">
                <div class="co-lg-6 mr-auto ml-auto">
                    <div class="features-top">
                        <h6>core features</h6>
                        <h1>Powerful Features</h1>
                        <p>Manage link for your projects, your workflows, your goals, your team.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Area
======================================-->
    <div class="footer-menu">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 text-left">
                    <div class="copyright">
                        <p>© 2020 | Dawwas &amp; Co<COLGROUP></COLGROUP>. Make your passion.</p>
                    </div>
                </div>
                <div class="col-lg-4 text-right">
                    <div class="social-icon">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-google-plus"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <!--End of row-->
        </div>
        <!--End of container fluid-->
        <a href="#" class="back-to-top"><i class="fa fa-long-arrow-up"></i></a>
    </div>
    <!--End of Footer Menu-->
        <script src="{{ asset('mesocial/assets/js/popper.min.js') }}"></script>
        <script src="{{ asset('mesocial/assets/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('mesocial/assets/js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('mesocial/assets/js/modal-video.js') }}"></script>
        <script src="{{ asset('mesocial/assets/js/main.js') }}"></script>
    </body>
</html>
