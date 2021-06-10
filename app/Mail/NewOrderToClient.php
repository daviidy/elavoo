<?php

namespace App\Mail;

use App\Models\Bill;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewOrderToClient extends Mailable
{
    use Queueable, SerializesModels;

    protected $bill;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Bill $bill)
    {
        $this->bill = $bill;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject("Nouvelle commande enregistrée")
        ->markdown('emails.notifications.order', [
            'numero_commande' => $this->bill->trans_id,
            'message' => "Votre commande a bien été reçue. Un livreur passera bientôt récupérer vos vêtements.",
            'bill_id' => $this->bill->id,
            'notif_id' => "",
        ]);
    }
}
