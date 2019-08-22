<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\SubscriberEmail;
use App\Blog;
use Mail;
use App;

class UserController extends Controller
{
    //

    public function welcome(){
        return view('welcome');
    }

    public function aboutPage(){
        return view('about');
    }

    public function testimony(){
        return view('testimony');
    }
    public function contactUs(){
        return view('contact');
    }

    public function events(){
        return view('events');
    }

    public function prayerRequest(){
        return view('prayer-request2');
    }

    public function executives(){
        return view('executives');
    }

    public function payment(){
        return view('index');
    }

    public function membership(){
        return view('membership');
    }

    public function audioStore(){
        return view('audio-store');
    }

    public function videoStore(){
        return view('video-store');
    }

    public function galleryStore(){
        return view('gallery-store');
    }

    public function blogTopic(){
        return view('blog');
    }

    public function viewMembers(){
        $viewMember = App\Member::all();
        return view('view', ["members"=>$viewMember]);
    }

    public function getUserEvent(){
        $Event = App\Event::all();
        return response()->json(['msg'=>$Event]);
    }

    public function viewTestimony(){
        $viewTestimony = App\Testimony::where("status", "=", true)->get();
        foreach($viewTestimony as $newTestimony){
            $mArray[] = array("Name"=>$newTestimony->Name, "Messages"=>$newTestimony->Testimony);
        }
        echo json_encode($mArray);
    }

    public function deleteEvent(Request $request){
        $event_to_delete = $request->mData;

        if($delete_Event = App\Event::where('title', '=', $event_to_delete)->delete()){
            return response()->json(['msg'=>$event_to_delete]);
        }
    }

    public function userSubscribe(Request $request){
        $userSub = $request->subEmail;
        $registerSubscriber = App\Subscribe::where('email', '=', $userSub)->first();
        if($registerSubscriber === null){
            if($register = App\Subscribe::create(['email'=>$userSub])){
                echo "Thank you for subscribing with nccf kano";
                //send emails
                $this->sendMail($userSub);
                // return response()->json(['msg'=>'entered']);
            }
        }else{
            echo "you are already a subscriber";
        }
    }

    public function sendMail($email){
        $subject = "Appreciation";
        $message = "Thank you for subscribing to NCCF KANO CHAPTER Newsletter";
        Mail::to($email)->send(new SubscriberEmail($email, $subject, $message));
        if(Mail::failures()){
            echo 'message not sent';
        }else{
            // echo 'message sent';
            App\Subscribe::where('email', '=', $email)
                        ->update(['status'=>true]);
        }
    }

    public function userTestimony(Request $request){
        $testifier = $request->testName;
        $testimonyMsg = $request->word;

        if($testimony = App\Testimony::create(['Name'=>$testifier, 'Testimony'=>$testimonyMsg])){
            echo "testimony entered";
        }
    }

    public function userPrayerRequest(Request $request){
        $requester = $request->requester;
        $prayer = $request->prayer;

        if($mPrayer = App\Prayer_request::create(['Name'=>$requester, 'Prayer_Request'=>$prayer])){
            echo "prayer request has been sent";
        }
    }

    public function contactMessage(Request $request){
        $contactMsg = $request->inputItem;
        if($insertContactMsg = App\Contactmessage::create([
            'Name'=>$contactMsg[0], 'Phone'=>$contactMsg[1],
            'Email'=>$contactMsg[2], 'Messages'=>$contactMsg[3]
        ])){
            echo "your message has been sent";
        }
    }

    public function addMemberShip(Request $request){
        $memberData = $request->membersData;
        $getmemberEmail = App\Member::where("Email", "=", $memberData[2])->first();

        if($getmemberEmail === null){
            if($insertMember = App\Member::create([
                "Name"=>$memberData[0], "Phone"=>$memberData[1],
                "Email"=>$memberData[2], "DOB"=>$memberData[3],
                "Gender"=>$memberData[4], "Zone"=>$memberData[5],
                "LGA"=>$memberData[6]
            ])){
                echo "Thank you, Nccf recognises you as a member";
            }
        }else{
            echo "this email is already in use";
        }
    }
}
