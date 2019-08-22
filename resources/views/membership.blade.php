<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="generator" content="Mobirise v4.9.5, mobirise.com">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <link rel="shortcut icon" href="assets/images/nccfpic-122x149.png" type="image/x-icon">
    <meta name="description" content="">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link href="{{ asset('css/theme.css') }}" rel="stylesheet">

    <!--<script type="text/javascript" src="scripts/controlScript.js"></script>
    
    <script type="text/javascript" src="scripts/registration.js"></script> -->
    <link rel="stylesheet" href="scripts/sweetalert2.css">

    <script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
    <!-- <script type="text/javascript" src="{{ asset('js/registration.js') }}"></script> -->
    <script type="text/javascript" src="{{ asset('js/sweetalert2.all.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/populate.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/AjaxScript/AjaxClass.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/AjaxScript/DesignPattern.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/AjaxScript/MembershipClass.js') }}"></script>
</head>

<body id="displayArea">
    <div class="loader-wrapper" id="loader">
        <div class="loader"></div>
    </div>
    <div id="desktop">
        <h1>Visit the site on a Desktop Screen, Thanks!</h1>
        <p> <img src="images/copyright.jpg" height="12"> Copyright
        </p>
    </div>

    <div class="grid">
        <div class="sect1">
            <div class="verify">
                <h1>Sanu De Zua!</h1>
                <p>Welcome To <br>NCCF Kano State Chapter</p>
                <a class="verBtn" href="{{ url('/viewmembers') }}">View Members</a>
            </div>
        </div>
        <div class="sect2">
            <div class="register">
                <figure>
                    <img src="{{ asset('images/logo.png') }}" alt="">
                </figure>
                <h1>NCCF Membership App</h1>
                <p>Please, let's keep your details safe</p>
                <div id="signup">
                    <form autocomplete="off">
                        <input type="text" name="name" class="input-style" id="name" placeholder="Name">
                        <input type="tel" name="phone" class="input-style" id="phone" maxlength="11" placeholder="Phone Number">
                        <input type="email" name="email" class="input-style" id="email" maxlength="30" placeholder="Email Address">
                        <input type="text" name="dob" class="input-style" id="dob" maxlength="30" placeholder="date of birth (Eg. July 9th)">
                        <select name="gender" id="gender" class="input-style">
                            <option value="">Gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                        <select class="input-style" id="zone" name="zone" onchange="populate(this.id,'lga')">
                            <option value="">Select Zone</option>
                            <option value="None">None</option>
                            <option value="Hossanah Zone">Hossanah Zone</option>
                            <option value="Gracious Zone">Gracious Zone</option>
                            <option value="Peaceful Zone">Peaceful Zone</option>
                            <option value="Dominion Zone">Dominion Zone</option>
                            <option value="Emmanuel Zone">Emmanuel Zone</option>
                            <option value="Shiloh Zone">Shiloh Zone</option>
                            <option value="Kingly Royal Zone">Kingly Royal Zone</option>
                            <option value="Upper Room Zone">Upper Room Zone</option>
                            <option value="Exploit Zone">Exploit Zone</option>
                            <option value="Fruitful Zone">Fruitful Zone</option>
                            <option value="Glorious Zone">Glorious Zone</option>
                            <option value="Goshen Zone">Goshen Zone</option>
                            <option value="Peniel Zone">Peniel Zone</option>
                            <option value="Excellent Zone">Excellent Zone</option>
                            <option value="New Jerusalem Zone">New Jerusalem Zone</option>
                        </select>
                        <select class="input-style" id="lga" name="lga"><option value="">Choose a Zone First To Select a LGA</option></select>

                        <div class="btn">
                            <button type="button" name="regBtn" id="regBtn">Register</button>
                        </div>
                    </form>
                </div>
                <div id="roomname">

                </div>
            </div>
        </div>
    </div>
    <footer>
        <p>
            Created with <img src="images/heart.png"> <i class="fa fa-heart"></i> by
            <a href="#">The Publicity Unit</a> - Learn more about NCCF, visit our website
            <a href="/">here</a>
        </p>
    </footer>
</body>

</html>