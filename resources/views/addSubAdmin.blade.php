@extends('layouts.adminapp') @section('content')

<div class="row justify-content-end" style="margin:0;">
    <div class="col-md-10">
        <div class="card">
            <div class="card-header">SubAdmin</div>

            <div class="card-body">
                <div class="grid">
                    <div class="box addAdminBox3">
                        <div class="bar-header"><span>Subadmin list</span></div>
                        <div class="subAdmin">
                            <table class='table table-striped table-bordered'>
                                <thead>
                                    <tr>
                                        <th>FirstName</th>
                                        <th>LastName</th>
                                        <th>Email</th>
                                        <th>UserType</th>
                                        <th>Phone</th>
                                        <th>Relationship</th>
                                        <th>Course Studied</th>
                                        <th>Status</th>
                                        <!-- <th class="Header">Edit</th> -->
                                        <th class="Header">Edit Stat</th>
                                    </tr>
                                </thead>
                                <tbody id="info">
                                    @foreach ($subAdmin as $newSubAdmin)
                                    <tr data-tr="{{ $newSubAdmin->FirstName }}">
                                        <td class="td" id="mFname">{{ $newSubAdmin->FirstName}}</td>
                                        <td class="td" id="mLname">{{ $newSubAdmin->LastName }}</td>
                                        <td class="td" id="email">{{ $newSubAdmin->email }}</td>
                                        <td class="td" id="mCRank">{{ $newSubAdmin->userType }}</td>
                                        <td class="td" id="phone">{{ $newSubAdmin->phone }}</td>
                                        <td class="td" id="mLname">{{ $newSubAdmin->Relationship }}</td>
                                        <td class="td" id="course">{{ $newSubAdmin->Course_Study }}</td>
                                        @if($newSubAdmin->status == '1')
                                        <td class="td" id="mStatus">Active</td>
                                        <td data-delete="{{ $newSubAdmin->email }}"><button class='remove' data-target="">Block</button></td>
                                        @else
                                        <td class="td" id="mStatus">InActive</td>
                                        <td ><button class='' data-target='m'>UnBlock</button></td>
                                        @endif
                                        <!-- <td data-edit="{{ $newSubAdmin->id }}"><button class="edit" id="btnEdit">Edit</button></td>-->
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="box addAdminBox1">
                        <div class="bar-header"><span>add new subadmin</span></div>
                        <div class="mySlides">
                            <div class="cover cBox1" id="cover_Firstname" style="">
                                <input type="text" placeholder="FirstName" class="inputData" id="mFirstname" name="firstname">
                            </div>
                            <div class="cover cBox2" id="cover_Lastname">
                                <input type="text" placeholder="LastName" class="inputData" id="" name="lastname">
                            </div>
                            <div class="cover cBox3" id="cover_Email">
                                <input type="email" placeholder="Email" class="inputData" id="" name="email">
                            </div>
                            <div class="cover cBox4" id="cover_phone">
                                <input type="text" placeholder="Phone Number" class="inputData" id="" name="phoneNum">
                            </div>
                            <div class="cover cBox5" id="cover_DOB">
                                <input type="text" placeholder="DOB" class="inputData mDOB" id="" name="DOB">
                            </div>
                            <div class="cover cBox6" id="cover_address">
                                <input type="text" placeholder="Address" class="inputData" id="" name="address">
                            </div>
                        </div>
                        <div class="mySlides">
                            <div class="cover cBox1" id="cover_course" style="">
                                <input type="text" placeholder="Course of Study" class="inputData" id="" name="course">
                            </div>
                            <div class="cover cBox2" id="cover_school">
                                <input type="text" placeholder="School Graduated From" class="inputData" id="" name="school">
                            </div>
                            <div class="cover cBox1" id="cover_pos">
                                <input type="text" placeholder="Excos Position" class="inputData" id="" name="position">
                            </div>
                            <div class="cover cBox2" id="cover_status">
                                <input type="text" placeholder="Relationship Status" class="inputData" id="" name="status">
                            </div>
                            <div class="cover cBox5" id="cover_DOB">
                                <input type="text" placeholder="DOB" class="inputData" id="" name="DOB">
                            </div>
                            <div class="cover cBox6" id="cover_address">
                                <input type="text" placeholder="code" class="inputData" id="" name="address">
                            </div>
                        </div>
                        <div class="myButtons">
                            <div class="btnBox btnBox1" id="mBtnBox1">
                                <button type="button" class="" id="btnPrev">Previous</button>
                            </div>
                            <div class="btnBox btnBox2" id="mBtnBox2">
                                <button type="button" class="" id="btnNext">Next</button>
                            </div>
                        </div>
                    </div>
                    <div class="box addAdminBox2">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection