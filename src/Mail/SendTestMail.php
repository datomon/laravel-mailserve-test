<?php

namespace Datomon\LaravelMailserveTest\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendTestMail extends Mailable
{
    use Queueable, SerializesModels;

    public $subject;
    public $content; 


    public function __construct($data)
    {
        $this->subject = $data['subject'];
        $this->content = $data['content'];
    }

    
    public function build()
    {
        return $this->subject($this->subject)
                    ->view('mailserve-test::send');
    }
}
