<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\sendSubAdminMail;
use App\User;
use Mail;
use App;

class RegisterUsers extends Controller
{
    //
    public function addAdmin(){
        $admin = App\User::where('email', '=', 'publicity@gmail.com')->first();
        if($admin === null){
            if($addAdmin = App\User::create([
                    'FirstName'=>'Publicity', 'LastName'=>'Publicity',
                    'name'=>'Admin', 'email'=>'publicity@gmail.com',
                    'password'=>bcrypt('admin123'), 'userLevel'=>'1',
                    'userType'=>'publicity', 'phone'=>'08165326943',
                    'DOB'=>'----', 'Address'=>'----',
                    'Course_Study'=>'----', 'School_Graduated_from'=>'----',
                    'Relationship'=>'----'])){
                        echo "User entered";
            }
        }else{
            echo "user exists";
        }
    }

    public function addSubAdmin(Request $request){
        $subAdminVal = $request->items;
        $password = 'admin';
        $appDetails = ['userEmail'=>$subAdminVal[2], 'userPassword'=>$password];
        $subAdmin = App\User::where('email', '=', $subAdminVal[2])->first();
        // $name = (substr($subAdminVal[0], 0, 4)+$subAdminVal[1]);

        if($subAdmin === null){
            if($addsubAdmin = App\User::create([
                'FirstName'=>$subAdminVal[0], 'LastName'=>$subAdminVal[1],
                'name'=>'Billy', 'email'=>$subAdminVal[2],
                'password'=>bcrypt($password), 'userLevel'=>'0',
                'userType'=>$subAdminVal[8], 'phone'=>$subAdminVal[3],
                'DOB'=>$subAdminVal[4], 'Address'=>$subAdminVal[5],
                'Course_Study'=>$subAdminVal[6], 'School_Graduated_from'=>$subAdminVal[7],
                'Relationship'=>$subAdminVal[9]
                ]))
            {
                $this->sendMail($subAdminVal[2], $appDetails);
            } 
        }else{
           echo "record already exist";
        }
    }

    public function sendMail($email, $appDetails){
        Mail::to($email)->send(new sendSubAdminMail($appDetails));
        if(Mail::failures()){
            echo 'record added and mail sent';
        }else{
            echo 'message sent';
        }
        
    }
}
