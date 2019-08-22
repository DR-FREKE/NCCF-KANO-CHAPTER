@extends('layouts.adminapp') @section('content')
<div class="row justify-content-end" style="margin:0;">
    <div class="col-md-10">
        <div class="card">
            <div class="card-header">AddEvent</div>

            <div class="card-body">
                <div class="grid">
                    <div class="box eventBox1">
                        <div class="mEvent">
                            <div class="event firstElement">
                                <label for="eventTitle">Title</label>
                                <div class="cover eBox1" id="event_title">
                                    <input type="text" name="eventTitle" placeholder="Untitled Event" id="mTitle" class="eventInput">
                                </div>
                            </div>
                            <div class="event secondElement">
                                <label for="eventDay">Start Day</label>
                                <div class="cover eBox2" id="event_day">
                                    <input type="text" name="eventDay" placeholder="input day" id="" class="eventInput">
                                    <div class="calIcon"><i class="lnr lnr-calendar-full"></i></div>
                                </div>
                            </div>
                            <div class="event thirdElement">
                                <label for="eventHour">Hour</label>
                                <div class="cover eBox3" id="event_hour">
                                    <input type="number" name="eventHour" placeholder="input Hour" id="" class="eventInput" min="1">
                                </div>
                            </div>
                            <div class="event fourtElement">
                                <label for="eventMin">Minute</label>
                                <div class="cover eBox4" id="event_min">
                                    <input type="text" name="eventMin" placeholder="input Minute" id="" class="eventInput">
                                </div>
                            </div>
                            <div class="event fifthElement">
                                <label for="eventSec">Duration</label>
                                <div class="cover eBox5" id="event_sec">
                                    <input type="text" name="eventSec" placeholder="input Second" id="" class="eventInput">
                                </div>
                            </div>
                            <div class="event secondElement">
                                <label for="eventDay">End Day</label>
                                <div class="cover eBox2" id="event_day">
                                    <input type="text" name="eventDay" placeholder="input day" id="" class="eventInput">
                                </div>
                            </div>
                            <div class="event thirdElement">
                                <label for="eventHour">Hour</label>
                                <div class="cover eBox3" id="event_hour">
                                    <input type="text" name="eventHour" placeholder="input Hour" id="" class="eventInput">
                                </div>
                            </div>
                            <div class="event fourtElement">
                                <label for="eventMin">Minute</label>
                                <div class="cover eBox4" id="event_min">
                                    <input type="text" name="eventMin" placeholder="input Minute" id="" class="eventInput">
                                </div>
                            </div>
                            <!-- <div class="event fifthElement">
                                <label for="eventSec">Second</label>
                                <div class="cover eBox5" id="event_sec">
                                    <input type="text" name="eventSec" placeholder="input Second" id="" class="">
                                </div>
                            </div> -->
                            <div class="event firstElement">
                                <label for="eventDes">Description</label>
                                <div class="cover eBox1" id="event_description">
                                    <textarea name="" id="textareaInput" class="mTextarea" cols="30" rows="10" placeholder="enter description"></textarea>
                                    <!-- <input type="text" name="eventTitle" placeholder="Untitled Event" id="" class=""> -->
                                </div>
                            </div>
                        </div>
                        <div class="btnEvent">
                            <button type="button" id="btnmEvent" class="">+ Add Event</button>
                        </div>
                    </div>
                    <div class="box eventBox2">
                        <div class="bar-header"><span>My Event</span></div>
                        <!-- grid display -->
                        <div class="bar-body">
                            <div class="bodyBox bBox1">
                                <div class="displayEvent" id="mList">
                                    <ul id="myEvent" class="eventList"></ul>
                                </div>
                            </div>
                            <div class="bodyBox bBox2">
                                <div id="cal">
                                    <div class="header">
                                        <span class="left button" id="prev"> &lang; </span>
                                        <span class="left hook"></span>
                                        <span class="month-year" id="label"> June 20&0 </span>
                                        <span class="right hook"></span>
                                        <span class="right button" id="next"> &rang; </span>
                                    </div>
                                    <table id="days">


                                    </table>
                                    <div id="cal-frame">


                                    </div>
                                </div>
                            </div>
                            <div class="bodyBox bBox3">
                                Ndifereke is my Name!!!
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection