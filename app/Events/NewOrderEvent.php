<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class NewOrderEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $notification; 
    public $user;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($notification, $user)
    {
        $message = "Vous avez une nouvelle notification d'Elavoo";
        $subject = "Elavoo requiert votre attention";

        switch ($notification->type) {
            case 'assign_pressing' : {
                $message = "Un nouvelle commande vous a été assigné";
                $subject = "Nouvelle commande pour vous";
                break;
            }
            case 'assign_client' : {
                $message = "Votre colis a été envoyé au pressing";
                $subject = "Colis envoyé au pressing";
                break;
            }
            case 'assign_deliver' : {
                $message = "Un colis vous a été assigné pour livraison";
                $subject = "Nouveau colis à livrer";
                break;
            }
            case 'assign_deliver_client' : {
                $message = "Votre colis a été remis au livreur";
                $subject = "Le livreur a votre colis";
                break;
            }
            case 'new_order_to_admin' : {
                $message = "Vous avez une nouvelle commande sur le site";
                $subject = "Nouvelle commande pour vous";
                break;
            }
            case 'new_order_to_client' : {
                $message = "Votre commande a bien été reçue. Un livreur passera bientôt récupérer vos vêtements.";
                $subject = "Nouvelle commande enregistrée";
                break;
            }
            case 'status_change' : {
                $message = "Le statut de la commande a été mis à jour vers : ".$notification->status;
                $subject = "Statut de la commande mis jour";
                break;
            }
            case 'new_order' : {
                $message = "Vous avez une nouvelle commande sur le site";
                $subject = "Nouvelle commande pour vous";
                break;
            }
        }

        $this->notification = [
            'message' => $message,
            'subject' => $subject
        ];

        $this->user = $user;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        // return new PrivateChannel('admin-channel');
        return ['admin-channel'];
    }

    /**
     * Even where to broadcast.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastAs()
    {
        // return new PrivateChannel('order-notification');
        return 'order-notification-user-'.$this->user->id;
    }
}
