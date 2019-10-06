{{-- ici on est dans la vue gégérée automatiquement lors de la création du mailable.
	cette vue utilise markdown. Et si on veut la customiser, il faut taper la commande:

		php artisan vendor:publish --tag=laravel-mail 
--}} 

@component('mail::message')
# Hey Admin,

- {{ $name }}
- {{ $email }}


@component('mail::panel')
{{ $msg }}
@endcomponent


Thanks,<br>
{{ config('app.name') }}


@component('mail::table')
| Laravel	| Table			| Example	|
| --------- |:-------------:| ---------:|
| Col 2 is	| Centered		| $10 		|
| Col 3 is	| Right-Aligned | $20 		|
@endcomponent

@component('mail::button', ['url' => '', 'color' => 'green'])
Créer un compte
@endcomponent


@endcomponent
