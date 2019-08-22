@extends('layouts.adminapp') @section('content')
<div class="" id="loadNewDoc">
    <div class="main-grid-container">

        <div class="left-pan">
            <p>
                Logged in as:<br />#admin
            </p>
            <div id="avartar">
                <img src="Images/icon10.png" alt="admin img">
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
            <h3>
                Jesus is Lord
            </h3>
            <br />
            <div class="btn-pan">
                <div class="top-btns">
                    <div class="btn-box" onclick="showDisabledMsg()">
                        <img src="images/icon1.png" alt="icon1">
                        <p>Add new admin</p>
                    </div>
                    <div class="btn-box" onclick="pageRequest('/prayerRequest')">
                        <img src="images/icon2.png" alt="icon2">
                        <p>View Prayer Request</p>
                    </div>
                    <div class="btn-box" onclick="pageRequest('/viewTestimony')">
                        <img src="images/icon3.png" alt="icon3">
                        <p>View Testimony</p>
                    </div>
                    <div class="btn-box" onclick="pageRequest('/genco')">
                        <img src="images/icon4.png" alt="icon4">
                        <p>GENCO</p>
                    </div>

                </div>
                <div class="mid-btns">
                    <div class="btn-box" onclick="pageRequest('/editGencoDeligates')">
                        <img src="images/icon6.png" alt="icon6">
                        <p>Edit GENCO Deligates</p>
                    </div>
                    <div class="btn-box" onclick="pageRequest('/dailyPost')">
                        <img src="images/icon5.png" alt="icon5">
                        <p>Post Word / verse of the day</p>
                    </div>
                    <div class="btn-box" onclick="pageRequest('/executiveLouge')">
                        <img src="images/icon7.png" alt="icon7">
                        <p>Executives lounge</p>
                    </div>
                    <div class="btn-box" onclick="pageRequest('nccf-kano-units.html')">
                        <img src="images/icon9.png" alt="icon9">
                        <p>NCCF Kano Units</p>
                    </div>
                </div>
                <div class="bottom-btns">
                    <a href="/">
                        <div class="btn-box">
                            <img src="images/icon10.png" alt="icon10">
                            <p>Goto Official Webpage</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection