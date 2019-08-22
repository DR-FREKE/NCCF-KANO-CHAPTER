@extends('layouts.adminapp') @section('content')

<div class="row justify-content-end" style="margin:0;">
    <div class="col-md-10">
        <div class="card">
            <div class="card-header">Dashboard</div>

            <div class="card-body">
                <div class="grid">
                    <div class="box box1">
                        <div class="icon">
                            <div class="add-teacher-Icon"><span><i class="lnr lnr-gift"></i></span></div>
                        </div>
                        <div class="revenue">
                            <h3>3,492</h3>
                            <p>Contributors</p>
                        </div>
                    </div>
                    <div class="box box2">
                        <div class="icon">
                            <div class="register-Icon"><span><i class="lnr lnr-users"></i></span></div>
                        </div>
                        <div class="revenue">
                            <h3>492</h3>
                            <p>Subscribers</p>
                        </div>
                    </div>
                    <div class="box box3">
                        <div class="icon">
                            <div class="conversion-Icon"><span> <i class="lnr lnr-cart"></i> </span></div>
                        </div>
                        <div class="revenue">
                            <h3>368</h3>
                            <p>Store items</p>
                        </div>
                    </div>
                    <div class="box box4">
                        <div class="icon">
                            <div class="visit-Icon"><span><i class="lnr lnr-eye"></i></span></div>
                        </div>
                        <div class="revenue">
                            <h3>64,500</h3>
                            <p>Today's Visits</p>
                        </div>
                    </div>
                    <div class="box box5">
                        <div class="box5-header">
                            <p>Corpers Analytics</p>
                        </div>
                        <canvas class="graph" id="mGraph">
                            Hopefully you don't see this
                        </canvas>
                    </div>
                    <div class="box box6">
                        <div class="box6-header">
                            <p>Total Revenue</p>
                        </div>
                        <div class="revenue-bar">

                        </div>
                    </div>
                    <div class="box box7">
                        <div class="box7-header">
                            <p>Quick Links</p>
                        </div>
                        <div class="box7-body">
                            <div class="box box7-box1">
                                <button><i class="lnr lnr-calendar-full"></i></button>
                            </div>
                            <div class="box box7-box2">
                                <button><i class="lnr lnr-gift"></i></button>
                            </div>
                            <div class="box box7-box3">
                                <button onclick="window.location='/addblog'"><i class="lnr lnr-book"></i></button>
                            </div>
                            <div class="box box7-box1">
                                <button onclick="window.location='/viewmembers'"><i class="lnr lnr-envelope"></i></button>
                            </div>
                            <div class="box box7-box2">
                                <button><i class="lnr lnr-cog"></i></button>
                            </div>
                            <div class="box box7-box3">
                                <button><i class="lnr lnr-cloud-download"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection