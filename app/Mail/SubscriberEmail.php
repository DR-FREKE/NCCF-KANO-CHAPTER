<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

use App;

class SubscriberEmail extends Mailable
{
    use Queueable, SerializesModels;
    public $userEmail;
    public $userSubject;
    public $userMessage;
    public $status;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($email, $subject, $message)
    {
        //
        $this->userEmail = $email;
        $this->userSubject = $subject;
        $this->userMessage = $message;
        $this->status = App\Subscribe::where('email', '=', $this->userEmail)->first();
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.subscriber')
                    ->subject($this->userSubject);
    }
}
