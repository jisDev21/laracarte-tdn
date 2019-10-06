<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\ContactMessageCreated;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use MercurySeries\Flashy\flashy;

class ContactsController extends Controller
{
    public function create()
    {
    	return view('contacts.create');
    }

    public function store_v1(ContactRequest $request)
    {
    	// ici on crée un nouvel objet "mailable" avec les données du formulaire
    	$mailable = new ContactMessageCreated($request->name, $request->email, $request->message);

    	// ensuite on envoie le mail via la méthode "to" de la façade "mail"
    	Mail::to(config('laracarte.admin_support_email'))->send($mailable);

    	flashy('Message envoyé');

    	return redirect()->route('home_path');
    }

    /* a ce stade, l'utilisateur remplit un formulaire et quand il clique sur le bouton, un mail
     * est envoyé à l'admin support.
     * ce qu'on pourrait faire, c'est stocker les mails envoyés:
     * on commence par créer un modèle pour nos messages
     *
     * 		php artisan make:model Models/Message -m
     *
     * cela crée notre modèle Message.php mais aussi la migration qu'il faut modifier et ne pas 
     * oublier de faire pa la suite: 
     *
     * 
     * ensuite on ré-écrit notre fonction "store" mais en utilisant notre modèle pour sauvegarder 
     * les données.
     */
    
    public function store_v2(ContactRequest $request)
    {
    	// ici on se sert des données du formulaires pour créer une nouvelle instance
    	// de notre modèle Message qu'on sauvegarde à la fin
    	$message = new Message;
    	$message->name = $request->name;
    	$message->email = $request->email;
    	$message->message = $request->message;
    	$message->save();

    	// ensuite on crée notre mailable avec les données du formulaires contenues dans notre
    	// instance de "Message"
    	$mailable = new ContactMessageCreated($message);
    	// on modifie aussi la méthode __construct de notre mailable puisqu'on ne lui passe plus
    	// 3 paramètres mais un seul, une instance de Message

    	// ensuite on envoie le mail via la méthode "to" de la façade "mail"
    	Mail::to(config('laracarte.admin_support_email'))->send($mailable);

    	flashy('Nous vous répondrons dans les plus brefs délais...');

    	return redirect()->route('home_path');
    }


    /* il y a une meileure méthode pour créer notre isntance de Message.
     * une fois qu'on a défini $fillable dans notre modèle Message, dans notre cas:
     *
     * 	protected $fillable = ['name', 'email', 'message'];
     *
     * alors on peut ecrire:
     */
    public function store(ContactRequest $request)
    {

    	$message_v1 = Message::create([
    		'name' => $request->name,
	    	'email' => $request->email,
	    	'message' => $request->message
    	]);

    	// ou encore:
    	
    	$message = Message::create($request->only('name', 'email', 'message'));

    	/* pour info, la méthode only() retourne un tableau. dans notre cas:
    	 *
    	 * 'name' => $request->name
    	 * 'email' => $request->email
    	 * 'message' => $request->message
    	 */

    	$message->save();

    	// ensuite on crée notre mailable avec les données du formulaires contenues dans notre
    	// instance de "Message"
    	$mailable = new ContactMessageCreated($message);
    	// on modifie aussi la méthode __construct de notre mailable puisqu'on ne lui passe plus
    	// 3 paramètres mais un seul, une instance de Message

    	// ensuite on envoie le mail via la méthode "to" de la façade "mail"
    	Mail::to(config('laracarte.admin_support_email'))->send($mailable);

    	flashy('Nous vous répondrons dans les plus brefs délais...');

    	return redirect()->route('home_path');
    }

}


/*

on a fait un premier test d'envoi d'email en utilisant smtp et mailtrap:
voila la config dans ".env":

MAIL_DRIVER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=e16c077c9df2d9
MAIL_PASSWORD=d6c89fdbd36d5a
MAIL_ENCRYPTION=null


puis on fait un autre test en utilisant smtp et maildev:

MAIL_DRIVER=smtp
MAIL_HOST=127.0.0.1
MAIL_PORT=1025
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null

*/