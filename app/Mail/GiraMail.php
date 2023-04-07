<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class GiraMail extends Mailable
{
    use Queueable, SerializesModels;

    public $email;
    public $newLink;
    public $messages;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($email,$messages,$newLink)
    {
        $this->newLink = $newLink;
        $this->email = $email;
        $this->messages = $messages;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
        ->subject('Solicitud Gira')
        ->markdown('Emails.SolicitudGira');
    }
}
