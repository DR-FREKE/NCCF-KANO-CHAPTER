@extends('layouts.adminapp') @section('content')

<div class="main-grid-container">
    <div class="left-pan">
        <p>
            Logged in as:<br />#admin name
        </p>
        <div id="avartar">
            <img src="images/icon10.png" alt="admin img">
        </div>
        <ul>
            <a href="/admin">
                <li>Home</li>
            </a>
            <a href="editprofile.php">
                <li>View/Edit Profile</li>
            </a>
        </ul>
    </div>

    <div class="rite-pan">
        <div class="editGencoContainer">
            <div id="leftPan">
                <ul>
                    <li onclick="genco('/viewDeligates')">&nbsp;View deligates</li>
                    <li onclick="genco('/enterNewDeligates')">&nbsp;Enter new delegates</li>
                    <li onclick="genco('/searchDeligate')">&nbsp;Search for Deligate</li>
                    <li onclick="genco('/deleteDeligates')">&nbsp;Delete deligates</li>
                </ul>
            </div>
            <div id="ritePan">
                <div id="displayPanel"></div>
            </div>
        </div>
    </div>
</div>
@endsection