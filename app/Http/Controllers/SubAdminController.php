<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\gencoMail;
use App;
use Mail;

class SubAdminController extends Controller
{
    //
    public function getPrayer(){
        $prayerRequest = App\Prayer_request::all();
        return view('prayer-request', ["prayer"=>$prayerRequest]);
    }

    public function getTestimony(){
        $testimony = App\Testimony::all();
        return view('viewTestimonies', ["testimony"=>$testimony]);
    }

    public function genco(){
        return view("genco");
    }

    public function executiveLounge(){
        return view("executiveLouge");
    }

    public function dailyPost(){
        return view("new-post");
    }

    public function sendPost(Request $request){
        $post = $request->dWord;
        $dailypost = App\Daily_word::where("id", "=", "1")->first();
        $dailypost->Word = $post;
        $dailypost->save();
        echo "updated";
    }

    public function sendToGenco(Request $request){
        $info = $request->param;
        $genco = App\Genco_deligate::all();
        foreach($genco as $newgenco){
            $this->sendMail($newgenco->Email, $info);
        }
    }

    public function sendMail($email, $appDetails){
        Mail::to($email)->send(new gencoMail($appDetails));
        if(Mail::failures()){
            echo 'record added and mail sent';
        }else{
            echo 'message sent';
        }
        
    }
    public function newDeligate(Request $request){
        $newDeligateName = $request->Name;
        $newDeligateEmail = $request->Email;
        $newDeligatePhone = $request->Phone;
        $newDeligateZone = $request->Zone;
        $newDeligateOffice = $request->Office;

        $checker = App\Genco_deligate::where('Email', '=', $newDeligateEmail)->first();
        if($checker === null){
            if($addDeligate = App\Genco_deligate::create([
                "Name"=>$newDeligateName, "Email"=>$newDeligateEmail,
                "PhoneNumber"=>$newDeligatePhone, "Zone"=>$newDeligateZone,
                "Office"=>$newDeligateOffice])){
                    echo "Deligate entered";
            }
        }else{
            echo "Deligate already exists";
        }
    }
    public function removeAllDeligate(){
        $deleteAll = App\Genco_deligate::where("s/n", ">", 0)->forceDelete();
        
    }

    public function viewDeligate(){
        $viewDeligate = App\Genco_deligate::all();
        return view('viewDeligates', ["deligate"=>$viewDeligate]);
    }

    public function updateTestimony(Request $request){
        $verifyTestimony = $request->truthVal;
        $testifier = $request->name;
        if($verifyTestimony == true){
            if($upadateTestimony = App\Testimony::where('Name', '=', $testifier)->update(['status'=>true])){
                echo "Verified";
            }

        }
    }
}
