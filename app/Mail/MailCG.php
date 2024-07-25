<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MailCG extends Mailable
{
    use Queueable, SerializesModels;

    public function build()
    {
        return $this->view('mailHtml')
        ->subject('Demo Email')
        ->from('sender@example.com');
    }
}