<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactMessageCreated extends Mailable
{
    use Queueable, SerializesModels;


/* ---------- 1er: test en utilisant une route test et non pas le controller ------------- */


    /* ici on définit une propriété publique puis on modifie
     * le constructeur
     */

    public $city;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct_v1($city)
    {
        $this->city = $city;
    }

    /**
     * Ici on indique quelle vue retouner pour notre mail.
     * dans notre cas, on range ces vues dans \views\emails\messages\
     * on passe à la vue les éléments qui composent notre mail
     * il y a un autre moyen de passer des valeurs à notre vue, 
     * c'est d'utiliser des propriétés publiques dans notre 
     * classe mailable (voir pus haut)
     *
     * @return $this
     */
    public function build_v1()
    {
        return $this->view('emails.messages.created')
                    ->with([
                        'name' => 'jis',
                        'email' => 'jis@jisdev.com',
                        'msg' => 'Je vous remercie pour laracarte'
                    ]);
    }



/* ---------- 2eme: bonne pratique pour créer un mail ------------- */


    public $name;
    public $email;
    public $msg;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $email, $msg)
    {
        $this->name = $name;
        $this->email = $email;
        $this->msg = $msg;
    }

    /**
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.messages.created');
    }

}
