<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactUs extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        //
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from(env('MAIL_FROM_ADDRESS'), 'Nouveau contact '.env('APP_NAME'))
            ->subject($this->data['nom_complet'])
            ->markdown('emails.contact_us')->with([
            'nom_complet' => $this->data['nom_complet'],
            'email' => $this->data['email'],
            'contact' => $this->data['contact'],
            'message' => $this->data['message'],
        ]);
    }
}
