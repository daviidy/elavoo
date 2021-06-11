<?php

namespace App\Notifications;

use App\Events\NewOrderEvent;
use App\Models\Bill;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NewOrder extends Notification implements ShouldQueue
{
    use Queueable;

    public $type;
    public $client;
    public $bill;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(string $type = '', User $client, Bill $bill)
    {
        $this->type = $type;
        $this->client = $client;
        $this->bill = $bill;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database', 'broadcast', 'mail'];
        // return ['mail'];
    }


    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        // dd($notifiable, $this, $this->bill->trans_id);
        $message = '';
        $subject = '';
        if ($this->type == 'new_order_to_admin') {
            $message = "Vous avez une nouvelle commande sur le site";
            $subject = "Nouvelle commande pour vous";
        }
        if ($this->type == 'new_order_to_client') {
            $message = "Votre commande a bien été reçue. Un livreur passera bientôt récupérer vos vêtements.";
            $subject = "Nouvelle commande enregistrée";
        }

        return (new MailMessage)
        ->subject($subject)
        ->markdown('emails.notifications.order', [
            'numero_commande' => $this->bill->trans_id,
            'message' => $message,
            'bill_id' => $this->bill->id,
            'notif_id' => $this->id,
        ]);
        // return (new MailMessage)
        //             ->line('The introduction to the notification.')
        //             ->action('Notification Action', url('/'))
        //             ->line('Thank you for using our application!');
    }

    public function toDatabase($notifiable)
    {
        return [
            'type'  => $this->type,
            'client'  => $this->client,
            'bill' => $this->bill
        ];
    }
    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }

    /**
     * Get the broadcastable representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return NewOrderEvent
     */
    public function toBroadcast($notifiable)
    {
        return event(new NewOrderEvent($this, $notifiable));
    }
}
