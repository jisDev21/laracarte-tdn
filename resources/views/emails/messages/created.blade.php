@component('mail::message')
# Hey Admin,

- {{ $msg->name }}
- {{ $msg->email }}


@component('mail::panel')
{{ $msg->message }}
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