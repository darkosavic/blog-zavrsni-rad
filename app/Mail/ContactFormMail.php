<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactFormMail extends Mailable
{
    use Queueable, SerializesModels;
    
    protected  $message;
    protected  $contactName;
    protected  $contactEmail;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($contactEmail, $contactName, $message)
    {
        $this->contactEmail = $contactEmail;
        $this->contactName = $contactName;
        $this->message = $message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        //to - je setovano u kotroleru
        //from - od koga je mail
        //replay to
        //cc
        //bcc
        //subject
        //body
        
        //ovaj sledeci deo, dole ispod, je nacin kako se prenose podaci sa forme
        $this->from($this->contactEmail, $this->contactName)
                ->replyTo($this->contactEmail)
                ->subject('New message from contact form on Bootstrap Blog');
        
        return $this->view('front.emails.contact_form')
                ->with([
                    'contactName' => $this->contactName,
                    'contactMessage' => $this->message,
                ]);
        //da biste setovali parametre na view cejnujemo with metodu
    }
}
