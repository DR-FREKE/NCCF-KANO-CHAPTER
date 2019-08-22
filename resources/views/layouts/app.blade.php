<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="generator" content="Mobirise v4.9.6, mobirise.com">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <link rel="shortcut icon" href="assets/images/nccfpic-128x156-1.png" type="image/x-icon">
    <meta name="description" content="">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/flexboxgrid.css') }}" rel="stylesheet">
    <link href="{{ asset('css/normalize.css') }}" rel="stylesheet">
    <link href="{{ asset('css/theme.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/web/assets/mobirise-icons/mobirise-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/tether/tether.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap-grid.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap-reboot.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/dropdown/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/socicon/css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/animatecss/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/theme/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/gallery/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/mobirise/css/mbr-additional.css') }}" type="text/css">

    <script crossorigin src="https://unpkg.com/react@16/umd/react.development.js"></script>
    <script crossorigin src="https://unpkg.com/react-dom@16/umd/react-dom.development.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/babel-standalone/6.24.0/babel.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script type="text/javascript" src="{{ asset('js/AjaxScript/AjaxClass.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/AjaxScript/EventCountdown.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/AjaxScript/userStarter.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/AjaxScript/DesignPattern.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/AjaxScript/Testimony.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/AjaxScript/ContactClass.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/SmoothScroll.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/sweetalert2.all.min.js') }}"></script>

</head>

<body>
    <div class="loader-wrapper" id="loader">
        <div class="loader"></div>
    </div>
    <section class="menu cid-qTkzRZLJNu" once="menu" id="menu1-0">
        <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm bg-color transparent">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <div class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </button>
            <div class="menu-logo">
                <div class="navbar-brand">
                    <span class="navbar-logo">
                        <a href="{{ url('/') }}">
                            <img src="assets/images/nccfpic-122x149.png" alt="nccf" title="" style="height: 3.8rem;">
                        </a>
                    </span>
                    <span class="navbar-caption-wrap">
                        <a class="navbar-caption text-white display-4" href="{{ url('/') }}">NCCF KANO</a>
                    </span>
                </div>
            </div>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true">
                    <li class="nav-item">
                        <a class="nav-link link text-white display-4" href="{{ url('/') }}">
                            <strong>HOME</strong>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link text-white display-4" href="{{ url('/about') }}">
                            <strong>ABOUT</strong>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link text-white display-4" href="{{ url('/makepayment') }}">
                            <strong>GIVE</strong>
                        </a>
                    </li>
                    <li class="nav-item dropdown open">
                        <a class="nav-link link text-white dropdown-toggle display-4" href="#" data-toggle="dropdown-submenu" aria-expanded="true">
                            <strong>REACH-OUT</strong>
                        </a>
                        <div class="dropdown-menu">
                            <a class="text-white dropdown-item display-4" href="{{ url('/testimony') }}">
                                <strong>Testimony</strong>
                            </a>
                            <a class="text-white dropdown-item display-4" href="{{ url('/contact-us') }}">
                                <strong>Contact Us</strong>
                            </a>
                            <a class="text-white dropdown-item display-4" href="{{ url('/prayer-request') }}">
                                <strong>Prayer Request</strong>
                            </a>
                            <a class="text-white dropdown-item display-4" href="{{ url('/membership') }}">
                                <strong>NCCF Membership</strong>
                            </a>
                            <a class="text-white dropdown-item display-4" href="{{ url('/executives') }}">
                                <strong>Meet The Executives</strong>
                            </a>
                        </div>
                    </li>
                    <!-- <li class="nav-item dropdown">
                        <a class="nav-link link text-white dropdown-toggle display-4" href="#" aria-expanded="false" data-toggle="dropdown-submenu">
                            <strong>STORE</strong>
                        </a>
                        <div class="dropdown-menu">
                            <a class="text-white dropdown-item display-4" href="{{ url('/audio') }}" aria-expanded="false">
                                <strong>Audio</strong>
                            </a>
                            <a class="text-white dropdown-item display-4" href="{{ url('/video') }}" aria-expanded="false">
                                <strong>Video</strong>
                            </a>
                            <a class="text-white dropdown-item display-4" href="{{ url('/gallery') }}" aria-expanded="false">
                                <strong>Gallery</strong>
                            </a>
                        </div>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link link text-white display-4" href="http://localhost/luma/home.php">
                            <strong>E-LIBRARY</strong>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link text-white display-4" href="{{ url('/blog') }}">
                            <strong>BLOG</strong>
                        </a>
                    </li>
                </ul>
                <!-- <div class="navbar-buttons mbr-section-btn">
                    <a class="btn btn-sm btn-secondary display-4" href="#">FIND NCCF</a>
                </div> -->
            </div>
        </nav>
    </section>
    <!-- <main class="" style="">
        <div class="body"> -->
    @yield('content')
    <!-- </div>
    </main> -->

    <section class="cid-rkJYY4etnA mbr-reveal" id="footer1-1v">
        <div class="container">
            <div class="media-container-row content text-white">
                <div class="col-12 col-md-3">
                    <div class="media-wrap">
                        <a href="index.html">
                            <img src="assets/images/nccfpic-192x235.png" alt="Mobirise" title="">
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-3 mbr-fonts-style display-7">
                    <h5 class="pb-3">
                        Address
                    </h5>
                    <p class="mbr-text">#1 Corpers' Close, New Badawa Layout, Nassarawa LGA, Kano.</p>
                </div>
                <div class="col-12 col-md-3 mbr-fonts-style display-7">
                    <h5 class="pb-3">
                        Contacts
                    </h5>
                    <p class="mbr-text">
                        Email: info@nccfkano&nbsp;<br>Phone: 0906 366 2639, <br>0803 452 5149 &nbsp;<br></p>
                </div>
                <div class="col-12 col-md-3 mbr-fonts-style display-7">
                    <h5 class="pb-3">
                        Links
                    </h5>
                    <p class="mbr-text">
                        <strong>
                            <a class="text-warning" href="#">Live Streaming</a>&nbsp;<br>
                            <a class="text-warning" href="{{ url('/makepayment') }}">Give Online</a>&nbsp;<br>
                            <a class="text-warning" href="order.html">Order Online</a>
                        </strong>
                    </p>
                </div>
            </div>
            <div class="footer-lower">
                <div class="media-container-row">
                    <div class="col-sm-12">
                        <hr>
                    </div>
                </div>
                <div class="media-container-row mbr-white">
                    <div class="col-sm-6 copyright">
                        <p class="mbr-text mbr-fonts-style display-4">
                            © Copyright 2019 NCCF Kano State Chapter - All Rights Reserved, <strong>Designed by The Publicity Unit</strong></p>
                    </div>
                    <div class="col-md-6">
                        <div class="social-list align-right">
                            <div class="soc-item">
                                <a href="https://twitter.com/mobirise" target="_blank">
                                    <span class="socicon-twitter socicon mbr-iconfont mbr-iconfont-social"></span>
                                </a>
                            </div>
                            <div class="soc-item">
                                <a href="https://www.facebook.com/pages/Mobirise/1616226671953247" target="_blank">
                                    <span class="socicon-facebook socicon mbr-iconfont mbr-iconfont-social"></span>
                                </a>
                            </div>
                            <div class="soc-item">
                                <a href="https://www.youtube.com/c/mobirise" target="_blank">
                                    <span class="socicon-youtube socicon mbr-iconfont mbr-iconfont-social"></span>
                                </a>
                            </div>
                            <div class="soc-item">
                                <a href="https://instagram.com/mobirise" target="_blank">
                                    <span class="socicon-instagram socicon mbr-iconfont mbr-iconfont-social"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <!-- The Modal -->
        <div id="myModal" class="modal">

            <!-- Modal content -->
            <div class="modal-content">
                <!-- <span >&times;</span> -->
                <div class="page-body">
                    <div class="head">
                        <h3 style="margin-top:5px;" id="genDisplay"></h3>
                        <!-- <h4>Lorem ipsum dolor sit amet</h4> -->
                    </div>

                    <h1 style="text-align:center;">
                        <div class="checkmark-circle">
                            <div class="background"></div>
                            <div class="checkmark draw"></div>
                        </div>
                        <h1>

                </div>
                <button class="close">Ok</button>

            </div>

        </div>
    </section>

    <script type="text/javascript" src="{{ asset('js/slider.js') }}"></script>
    <script src="{{ asset('assets/web/assets/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/popper/popper.min.js') }}"></script>
    <script src="{{ asset('assets/tether/tether.min.js') }}"></script>
    <script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/smoothscroll/smooth-scroll.js') }}"></script>
    <script src="{{ asset('assets/dropdown/js/script.min.js') }}"></script>
    <script src="{{ asset('assets/viewportchecker/jquery.viewportchecker.js') }}"></script>
    <script src="{{ asset('assets/parallax/jarallax.min.js') }}"></script>
    <script src="{{ asset('assets/countdown/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('assets/mbr-switch-arrow/mbr-switch-arrow.js') }}"></script>
    <script src="{{ asset('assets/vimeoplayer/jquery.mb.vimeo_player.js') }}"></script>
    <script src="{{ asset('assets/touchswipe/jquery.touch-swipe.min.js') }}"></script>
    <script src="assets/masonry/masonry.pkgd.min.js"></script>
    <script src="assets/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="{{ asset('assets/bootstrapcarouselswipe/bootstrap-carousel-swipe.js') }}"></script>
    <script src="assets/vimeoplayer/jquery.mb.vimeo_player.js"></script>
    <script src="{{ asset('assets/mbr-testimonials-slider/mbr-testimonials-slider.js') }}"></script>
    <script src="{{ asset('assets/theme/js/script.js') }}"></script>
    <script src="assets/gallery/player.min.js"></script>
    <script src="assets/gallery/script.js"></script>
    <script src="assets/slidervideo/script.js"></script>
    <script src="{{ asset('assets/formoid/formoid.min.js') }}"></script>

    <script>
        var design = new DesignPattern();

        $('.live').on('click', (e) => {
            e.preventDefault();

            var data_r = this.getElementById("liveStr");
            alert(data_r.innerHTML);
            // var val = document.getElementsByClassName('liveStream');
            // for (var i = 0; i < val.length; i++) {
            //     var textEntered = document.getElementsByClassName('liveStreaming');
            //     textEntered[i].innerHTML = val[i].innerHTML;
            //     // $('.liveStreaming').html(val[i].innerHTML);
            //     design.modal("this is an upcoming feature");
            // }

        });
        $('.close').on('click', () => {
            design.closeall();
        })
    </script>


    <input name="animation" type="hidden">
    <div id="scrollToTop" class="scrollToTop mbr-arrow-up"><a style="text-align: center;"><i class="mbr-arrow-up-icon mbr-arrow-up-icon-cm cm-icon cm-icon-smallarrow-up"></i></a></div>
</body>

</html>