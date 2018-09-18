<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $inputs;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($inputs)
    {
        $this->inputs = $inputs;
    }

    /**
     * Build the message with data from input e html.
     *
     * @return $this
     */
    public function build()
    {
        //HTML blade view to be send
        return $this->view('emails.contact')->with([
          'name'        => $this->inputs['name'],
          'email'       => $this->inputs['email'],
          'phone'       => $this->inputs['phone'],
          'bodyMessage' => $this->inputs['bodyMessage']
        ]);
    }
}
