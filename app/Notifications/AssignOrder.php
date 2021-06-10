<?php

namespace App\Notifications;

use App\Events\AssignOrderEvent;
use App\Events\StatusLiked;
use App\Models\Bill;
use App\Models\Order;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class AssignOrder extends Notification implements ShouldQueue
{
    use Queueable;

    public $type;
    public $assigner;
    public $user;
    public $bill;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(string $type = '',User $assigner, User $user, Bill $bill)
    {
        $this->type = $type;
        $this->assigner = $assigner;
        $this->user = $user;
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
        if ($this->type == 'assign_pressing') {
            $message = "Un nouvelle commande vous a été assigné";
            $subject = "Nouvelle commande pour vous";
        }
        if ($this->type == 'assign_client') {
            $message = "Votre colis a été envoyé au pressing";
            $subject = "Colis envoyé au pressing";
        }
        if ($this->type == 'assign_deliver') {
            $message = "Un colis vous a été assigné pour livraison";
            $subject = "Nouveau colis à livrer";
        }
        if ($this->type == 'assign_deliver_client') {
            $message = "Votre colis a été remis au livreur";
            $subject = "Le livreur a votre colis";
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
            'type' => $this->type,
            'assigner' => $this->assigner,
            'user' => $this->user,
            'bill' => $this->bill,
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
            // 'assigned_by' => $this->assigner->id,
            // 'user_id' => $this->user->id,
            // 'bill_id' => $this->bill->id,
        ];
    }

    /**
     * Get the broadcastable representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return AssignOrderEvent
     */
    public function toBroadcast($notifiable)
    {
        return event(new AssignOrderEvent($this));
    }
}
