<?php

use App\Mail\ContactMessageCreated;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [
	'as' => 'home_path',
	'uses' => 'Pagescontroller@home'
]);


/* ----- Route test pour le Mailable (sans utiliser le controller) ---------- */

// mailable sans propriétés publiques définies
Route::get('/test-email_v1', function(){
	// ici, le simple fait de retourner un mailable fait que laravel va
	// automatiquement retourner la vue indiquée dans le mailable
	return new ContactMessageCreated;
});

// mailable avec propriétés publiques définies
Route::get('/test-email', function(){
	return new ContactMessageCreated('Jis', 'jis@jisdev.com', 'Mais quel bel email !!');
});




Route::get('/about', [
	'as' => 'about_path',
	'uses' => 'Pagescontroller@about'
]);

Route::get('/contact', [
	'as' => 'contact_path',
	'uses' => 'Contactscontroller@create'
]);

Route::post('/contact', [
	'as' => 'contact_path',
	'uses' => 'Contactscontroller@store'
]);