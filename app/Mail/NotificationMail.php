<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NotificationMail extends Mailable
{
    use Queueable, SerializesModels;
    public $contact;
    public $isAdmin;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($contact, $isAdmin = false)
    {
        $this->contact = $contact;
        $this->isAdmin = $isAdmin;
    }
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        if ($this->isAdmin) {
            return $this->subject('New Client Reached US! MetaDigital Marketing')
                ->view('admin.email.contact')
                ->with([
                    'contact' => $this->contact,
                ]);
        } else {
            return $this->subject('MetaDigital Marketing Team - We Received Your Message')
                ->view('contact.email.contact-status')
                ->with([
                    'contact' => $this->contact,
                ]);
        }
    }
}
