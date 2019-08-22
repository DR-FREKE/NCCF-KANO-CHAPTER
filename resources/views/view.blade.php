<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="assets/images/nccfpic-122x149.png" type="image/x-icon">
    <meta name="description" content="">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="css/view.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script>
        function printList(printBtn) {
            var restorepage = document.body.innerHTML;
            var printcontent = document.getElementById(printBtn).innerHTML;
            document.body.innerHTML = printcontent;
            window.print();
            document.body.innerHTML = restorepage;
        }
    </script>

</head>

<body>
    <nav class="site-header sticky-top py-1">
        <div class="container d-flex flex-column flex-md-row justify-content-between">
            <a class="py-2" href="#">
                <img src="images/logo.png" height="30" alt="" srcset="">
            </a>
            @if(Auth::user())
                <a class="py-2 d-none d-md-inline-block" href="{{ url('/admin') }}">Home</a>
            @else
                <a class="py-2 d-none d-md-inline-block" href="{{ url('/') }}">Home</a>
                <a class="py-2 d-none d-md-inline-block" href="{{ url('/membership') }}">Register</a>
            @endif
            
            <!-- <a class="py-2 d-none d-md-inline-block" href="verification.php">Verify Payment</a>
            <a class="py-2 d-none d-md-inline-block" href="#">Add To Paid List</a> -->
        </div>
    </nav>
    <div class="container py-5">
        <div id="print"><br>
            <center>
                <h3>Membership List</h3> <a href="#view" class="btn btn-info btn-lg">Scroll Down</a> </center><br>
            <table class="table table-striped table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">S/N</th>
                        <th scope="col">Name</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Date of Birth</th>
                        <th scope="col">Email</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Zone</th>
                        <th scope="col">LGA</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($members as $newMembers)
                    <tr>
                        <td>{{ $newMembers->id }}</td>
                        <td>{{ $newMembers->Name }}</td>
                        <td>{{ $newMembers->Phone }}</td>
                        <td>{{ $newMembers->DOB }}</td>
                        <td>{{ $newMembers->Email }}</td>
                        <td>{{ $newMembers->Gender }}</td>
                        <td>{{ $newMembers->Zone }}</td>
                        <td>{{ $newMembers->LGA }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table><br>
        </div>
        <div id="view"></div>
        <button type="submit" class="btn btn-primary btn-lg" id="printBtn" onclick="printList('print')">Print List</button>
        <a href="#print" class="btn btn-info btn-lg">Scroll To Top</a>
    </div>
    <footer class="container py-5">
        <div class="row">
            <div class="col-12 col-md">
                <img src="images/logo.png" height="30" alt="" srcset="">
                <small class="d-block mb-3 text-muted">&copy; State Conference 2019</small>
            </div>
        </div>
    </footer>
</body>

</html>