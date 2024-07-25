<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ComplexEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $details; // Public variable to hold email data
public $dompdf;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($details,$dompdf=null)
    {
        $this->details = $details; // Assign data to the $details property
        $this->dompdf = $dompdf;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        if ($this->dompdf == null) {return $this->subject('Complex Email Example Subject')
                    ->view('emails.complex') // Blade template for the email
                    ->with([
                        'key' => 'value', // Additional data to pass to the view
                        'details' => $this->details, // Pass $details to the view
                    ])
                        ->from('sender@example.com', 'LaravelMail');}
                        else
{
                return $this->subject('Complex Email Example Subject')
                    ->view('emails.complex') // Blade template for the email
                    ->with([
                        'key' => 'value', // Additional data to pass to the view
                        'details' => $this->details, // Pass $details to the view
                    ])
                        ->from('sender@example.com', 'LaravelMail2')
                                        ->attachData($this->dompdf, 'generated-pdf.pdf', [
                    'mime' => 'application/pdf',
                ]);}
                    //->embed(public_path('images/logo.png'), 'logo'); // Embedding image
}
    }

