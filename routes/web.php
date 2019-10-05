<?php

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

Route::get('/about', [
	'as' => 'about_path',
	'uses' => 'Pagescontroller@about'
]);

Route::get('/contact', [
	'as' => 'contact_path',
	'uses' => 'Contactscontroller@create'
]);