<?php

namespace App\Mails;

use App\Models\RegistrationPerson;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class RegistrationEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Instance of RegistrationPerson
     *
     * @var RegistrationPerson
     */
    public $registrationPerson;

    /**
     * Create a new message instance.
     *
     * @param User $registrationPerson
     */
    public function __construct(RegistrationPerson $registrationPerson)
    {
        $this->registrationPerson = $registrationPerson;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.registration')->subject('Confirmation your account on Kongkow Nusantara');
    }
}