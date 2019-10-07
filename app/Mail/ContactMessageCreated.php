<?php

namespace App\Mail;

use App\Models\Message;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

// ici, "implements ShouldQueue" est rajouté pour indiquer à notre appli d'utiliser les queues 
// quand elle envoie des mails

class ContactMessageCreated extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    /* 1ere solution:
     * on crée des variables publiques qui serviront à la construction d'un nouvel objet "ContactMessageCreated" (voir 
     * fonction "store_v1" du controller "ContactsController")
     * 
     */
    
    // public $name;
    // public $email;
    // public $msg;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    // public function __construct_v1($name, $email, $msg)
    // {
    //     $this->name = $name;
    //     $this->email = $email;
    //     $this->msg = $msg;
    // }


    /* 2eme solution:
     * besoin que d'une seule variable publique, on passe directement en paramètres une instance de notre modèle Message
     * à la fonction "__construct"
     */

    public $msg;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Message $msg)
    {
        $this->msg = $msg;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        /* ici on construit le mail avec, comme valeurs (adresse et nom) pour le from, les valeurs par defaut. Dans notre
         * cas, l'adresse est "hello@laracarte.com" et le nom "Laracarte". 
         * 
         *    return $this->markdown('emails.messages.created');
         *
         * Si on veut queles informations de l'utilisateur
         * apparaissent pour qu'on puisse faire un reply à son message, il faut préciser les valeurs du from
         *
         */ 
        
        return $this->from($this->msg->email, $this->msg->name)
                    ->markdown('emails.messages.created');
    }
}
