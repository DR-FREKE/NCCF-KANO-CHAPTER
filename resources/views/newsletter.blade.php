@extends('layouts.adminapp') @section('content')
<div class="row justify-content-end" style="margin:0;">
    <div class="col-md-10">
        <div class="card">
            <div class="card-header">NewsLetter</div>

            <div class="card-body">
                <div class="grid">
                    <div class="box eventBox1">
                        <div class="mEvent">
                            <div class="event sixthElement">
                                <label for="subTo">Recipients</label>
                                <div class="cover eBox1" id="subscriber_To">
                                    <input type="text" name="subTo" placeholder="To" style="width:100%;" id="mSubTo" class="subscriberInput">
                                </div>
                            </div>
                            <div class="event seventhElement">
                                <label for="remember"></label>
                                <div class="eBox1" id="subscriber_ToAll" style="padding-left:1em;">
                                    <div style="padding:1em 0 0 0;"><input type="checkbox" name="remember" id="mCheckAll"><span style="padding-left:.4em;">send to all subscribers</span></div>
                                </div>
                            </div>
                            <div class="event firstElement">
                                <label for="sub_Subject">Subject</label>
                                <div class="cover eBox2" id="subscriber_Subject">
                                    <input type="text" name="sub_Subject" placeholder="Subject" id="subject" class="subscriberInput">
                                </div>
                            </div>
                            <div class="event firstElement">
                                <label for="eventDes">Message body</label>
                                <div class="cover eBox1" id="event_description">
                                    <textarea name="" id="textareaInput" class="mTextarea" style="max-height: 150px; min-height: 150px;" cols="30" rows="10" placeholder="enter message"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="btnEvent">
                            <button type="button" id="btnMail" class="">Send Mail</button>
                        </div>
                    </div>
                    <div class="box eventBox2">
                        <div class="bar-header"><span>Subscribers</span></div>
                        <!-- grid display -->
                        <div class="bar-body">
                            <div class="bodyBox bBox1">
                                <div class="displaySub" id="mList">
                                    <ul id="mSubscriber" class="subscriberList"></ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection