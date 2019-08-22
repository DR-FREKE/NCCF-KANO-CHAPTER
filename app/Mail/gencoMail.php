<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class gencoMail extends Mailable
{
    use Queueable, SerializesModels;
    public $gencoInfo;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($gencoInfo)
    {
        //
        $this->gencoInfo = $gencoInfo;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.genco')->subject("Genco Information");
    }
}
