<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\SubscriberEmail;
// use App\User;
use App\Event;
use App\Blog;
use Mail;
use App;

class AdminController extends Controller
{
    public $myArray = [];
    //
    public function addStore(){
        return view('addStore');
    }

    public function errorHandler(){
        echo 'error 404';
    }

    public function addBlog(){
        return view('addBlog');
    }

    public function addSubAdmin(){
        $subAdmin = App\User::all()->where("userLevel", "=", "0");
        return view('addSubAdmin', ["subAdmin"=>$subAdmin]);
    }

    public function addEvent(){
        return view('addEvent');
    }

    public function newsLetter(){
        return view('newsletter');
    }

    //write to file function
    public function postBlog(Request $request){
        $blogPost = $request->text;
        $file_name = $request->file_name;
        
        $blog = App\Blog::where('blogname', '=', $file_name)->first();
        if($blog === null){
            if($mBlog = App\Blog::create(['blogname'=>$file_name])){
                $file_location = fopen('..\resources\views\blogFolder/'.$file_name.'.blade.php', 'w');
                if(fwrite($file_location, $blogPost)){
                    return response()->json(['msg'=>"sent"]);
                }
            }
        }else{
            //do something...
            return response()->json(['msg'=>'this topic exists']);
        }      
    }

    public function postEvent(Request $request){
        $eventData = $request->eventDatas;
        $textAreaVal = $request->textarea;
        
        $event = App\Event::where('title', '=', $eventData[0])->first();
        if($event === null){
            if($mEvent = App\Event::create([
                'title'=>$eventData[0], 'eventStart_day'=>$eventData[1],
                'start_hours'=>$eventData[2], 'start_minutes'=>$eventData[3],
                'duration'=>$eventData[4], 'eventEnd_day'=>$eventData[5],
                'end_hours'=>$eventData[6], 'end_minutes'=>$eventData[7],
                'description'=>$textAreaVal]))
            {
                return response()->json(['msg'=>'entered!']);
            }
        }else{
            return response()->json(['msg'=>'event already exist']);
        }
    }

    public function getEvent(){
        $Event = App\Event::withTrashed()->get();
        return response()->json(['msg'=>$Event]);
    }

    public function getSubscribers(){
        $subscribers = App\Subscribe::withTrashed()->get();
        foreach($subscribers as $subscriber){
            echo '<li class="listView">'.$subscriber->email.'</li>';
        }
    }

    public function sendSubscribersMail(Request $request){
        $subscriber = $request->subscriber;
        $checkbox = $request->checkbox;
        $subject = $request->subject;
        $message = $request->message;

        if($checkbox == true){
            $allUser = App\Subscribe::where("status", "=", true)->get();
            foreach($allUser as $newallUser){
                $this->sendMail($newallUser->email, $subject, $message);
            }
        }else{
            $this->sendMail($subscriber, $subject, $message);
        }
    }

    public function sendMail($email, $subject, $message){
        
        Mail::to($email)->send(new SubscriberEmail($email, $subject, $message));
        if(Mail::failures()){
            echo'message not sent';
        }else{
            echo 'message sent';
        }
    }

    public function deleteSubAdmin(Request $request){
        $email_to_delete = $request->items;

        echo $email_to_delete;
    }
}
