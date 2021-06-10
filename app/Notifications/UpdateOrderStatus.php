<?php

namespace App\Notifications;

use App\Events\UpdateOrderStatusEvent;
use App\Models\Bill;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class UpdateOrderStatus extends Notification implements ShouldQueue
{
    use Queueable;

    public $type;
    public $assigner;
    public $admin;
    public $deliver;
    public $bill;
    public $status;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(string $type = '', User $assigner, User $admin = null, User $deliver = null, Bill $bill, string $status = '')
    {
        $this->type = $type;
        $this->assigner = $assigner;
        $this->admin = $admin;
        $this->deliver = $deliver;
        $this->bill = $bill;
        $this->status = $status;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database', 'broadcast'];
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
        if ($this->type == 'status_change') {
            $message = "Le statut de la commande a été mis à jour vers : ".$this->status;
            $subject = "Statut de la commande mis jour";
        }
        if ($this->type == 'new_order') {
            $message = "Vous avez une nouvelle commande sur le site";
            $subject = "Nouvelle commande pour vous";
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
            'assigner'  => $this->assigner,
            'admin' => $this->admin,
            'deliver'   => $this->deliver,
            'bill'  => $this->bill,
            'status'    => $this->status,
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
     * @return UpdateOrderStatusEvent
     */
    public function toBroadcast($notifiable)
    {
        return event(new UpdateOrderStatusEvent($this));
    }
}
