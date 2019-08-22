<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="assets/images/nccfpic-128x156-1.png" type="image/x-icon">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/flexboxgrid.css') }}" rel="stylesheet">
    <link href="{{ asset('css/normalize.css') }}" rel="stylesheet">
    <link href="{{ asset('css/theme.css') }}" rel="stylesheet">
    <link href="{{ asset('css/adminDashboard.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/styles/main-theme.css') }}">
    <link rel="shortcut icon" type="image-x/icon" href="{{ asset('css/images/icon10.png') }}">
    <script type="text/javascript" src="{{ asset('js/scripts.js') }}"></script>
    <script src="{{ asset('js/sweetalert2.all.min.js') }}"></script>

    <!-- <script src="https://cdn.plot.ly/plotly-latest.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <script src="https://cloud.tinymce.com/5/tinymce.min.js?apiKey=wehvml7r0od76m1r37we7dxhn1hcqwpnelngplzqqtt29b4u"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script type="text/javascript" src="{{ asset('js/SmoothScroll.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/AjaxScript/AjaxClass.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/AjaxScript/BlogPostClass.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/AjaxScript/AdminClass.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/AjaxScript/SubAdminClass.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/AjaxScript/SendSubMailClass.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/AjaxScript/EventClass.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/AjaxScript/LogoutClass.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/AjaxScript/FormSlider.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/AjaxScript/Starter.js') }}"></script>
</head>

<body>
    <div id="app">
        <header id="main-header">
            <nav id="navbar" class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
                <div class="container">
                    <a class="navbar-brand" href="{{ url('/admin') }}">
                        <img src="assets/images/nccfpic-122x149.png" alt="" title="" height="50"> <strong>{{ config('app.name') }}</strong>
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                    <div class="collapse navbar-collapse" id="navbarResponsive">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav mr-auto">

                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ml-auto">
                            <!-- Authentication Links -->
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" id="mSchool" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="" onclick="event.preventDefault();">Profile</a>
                                    </li>
                                    <li>
                                        <a href="" onclick="event.preventDefault();">Account</a>
                                    </li>
                                    <li>
                                        <a href="" onclick="event.preventDefault();">Settings</a>
                                    </li>
                                    <li>
                                        <a href="" id="btnLogout">Logout</a>

                                        <!-- <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form> -->
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <div class="mNav" id="myNavbar">
            @if(Auth::user()->userLevel == '1')
            <div class="sidenav" id="mSidenav">
                <div class="mSidebar" data-simplebar>
                    <ul class="" id="">
                        <li class="active"><a href="{{ url('/admin') }}"><i class="lnr lnr-home"></i><span>Dashboard</span></a></li>
                        <li><a href="{{ url('/addstore') }}"><i class="lnr lnr-cart"></i><span>Add to Store</span></a></li>
                        <li><a href="{{ url('/addblog') }}"><i class="lnr lnr-book"></i><span>Bible Study Blog</span></a></li>
                        <li>
                            <a href="{{ url('/addSubAdmin') }}"> <i class="lnr lnr-users"></i><span>Add SubAdmin</span></a>
                        </li>
                        <li><a href="#"><i class="lnr lnr-gift"></i><span>View Contributors</span></a></li>
                        <li><a href="{{ url('/addevent') }}"><i class="lnr lnr-calendar-full"></i><span>Add Events</span></a></li>
                        <li><a href="{{ url('/admin') }}"><i class="lnr lnr-film-play"></i><span>View Comments</span></a></li>
                        <li><a href="{{ url('/newsletter') }}"><i class="lnr lnr-file-add"></i><span>Send News Letter</span></a></li>
                        <li><a href="#"><i class="lnr lnr-bullhorn"></i><span>Bulk Messages</span></a></li>
                        <li><a href="#"><i class="lnr lnr-envelope"></i><span>Send Emails</span></a></li>
                    </ul>
                </div>
            </div>
            @endif
        </div>

        <main class="" style="margin-top:7em;">
            <div class="body">
                @yield('content')
            </div>
        </main>
    </div>
    <script type="text/javascript" src="{{ asset('js/slider.js') }}"></script>
    <script type="text/babel" src="{{ asset('js/countdown.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/plotGraph.js') }}"></script>
    <script>
        $(document).ready(() => {
            tinymce.init({
                selector: '#mytextarea',
                plugins: 'print preview powerpaste searchreplace autolink directionality advcode visualblocks visualchars fullscreen image link media mediaembed template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists wordcount tinymcespellchecker a11ychecker imagetools textpattern help formatpainter permanentpen pageembed mentions linkchecker',
                toolbar: 'undo redo formatselect | bold italic strikethrough underline forecolor backcolor permanentpen formatpainter | link image media pageembed | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent | addcomment',
                setup: function(editor) {
                    editor.on('change', function() {
                        // editor.save();
                        tinymce.triggerSave();
                    })
                },
                format: Text,
            });
        });
    </script>
    <script>
        function openCity(evt, itemName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(itemName).style.display = "block";
            //document.getElementById(cityName).style.border-bottom = "2px solid #255";
            evt.currentTarget.className += " active";
        }

        // Get the element with id="defaultOpen" and click on it
        document.getElementById("defaultOpen").click();
    </script>


</body>

</html>