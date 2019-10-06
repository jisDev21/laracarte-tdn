<?php

namespace App\Mail;

use App\Models\Message;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMessageCreated extends Mailable
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
        return $this->markdown('emails.messages.created');
    }
}
