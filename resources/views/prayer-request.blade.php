@extends('layouts.adminapp') @section('content')

<!--Uses all classes from view-testimony.html -->
<div class="main-grid-container">
    <div class="left-pan">
        <p>
            Logged in as:<br />#admin name
        </p>
        <div id="avartar">
            <img src="profileImg/Img.jpg" alt="admin img">
        </div>
        <ul>
            <a href="/admin">
                <li>Home</li>
            </a>
            <a href="editprofile.php">
                <li>View/Edit Profile</li>
            </a>
            <a href="">
                <li>Log out</li>
            </a>
        </ul>
    </div>

    <div class="rite-pan">
        @foreach ($prayer as $newPrayer)
        <div class="testimony-pan">
            <p>{{ $newPrayer->Prayer_Request }}</p>
            <h4>Request by: {{ $newPrayer->Name }}</h4>
            <h5>{{ $newPrayer->created_at }}</h5>
        </div>
        @endforeach

    </div>
</div>
@endsection