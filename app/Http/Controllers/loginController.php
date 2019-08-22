<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App;
use App\User;
use Auth;

class loginController extends Controller
{
    //

    public function __construct(){

    }

    public function isLoggedIn(Request $request){

        if($request->session()->has('userLevel')){

            $userLevel = $request->session()->get('userLevel');

            if($userLevel == 1){
                return view("admin");
            }else{
                return view("subadmin");
            }
        }else{
            return view("auth.login");
        } 
    }

    public function isLoggedOut(Request $request){
        $res = $request->data;

        if($res == true){
            //
            // if($request->session()->flush()){
                $request->session()->flush();
                return response()->json(['msg1'=>true]);
            // }
        }
    }
}
