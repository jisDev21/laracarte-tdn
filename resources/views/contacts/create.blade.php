{{-- ici la vue d'un formulaire pour envoyer un mail:
	la 1ere chose à faire est d'installer le package "guzzle":

	composer require guzzlehttp/guzzle

	ensuite on configure laravel pour le mailing avec le 
	fichier config\mail.php:
	d'abord on choisit le driver à utiliser (smtp, sendmail etc..). Si on travaille en dev, on peut choisir "log" et tous les mails seront stockés dans \storage\logs\laravel.log


	on va créer: 
	 - un controller "ContactsController": qui va gérer les vues à renvoyer selon le type
	 										de requete (GET ou POST)
	 - un formRequest "ContactRequest": qui permet de gérer les données du formulaire, les 
	 									autorisations user et les règles de validation
	 - un objet Mailable "ContactMessageCreated": un constructeur de mail ?
	 												taper la commande:

	 												php artisan make:mail nomDuMailable

	 												cela crée un fichier nomDuMailable.php dans
	 												\app\mail\
	 												on peut aussi créer le mailable et la vue correspondante
	 												avec la commande:

	 												php artisan make:mail nomDuMailable --markdown=cheminEtNomDeLaVue
	 - une vue "created" 
 --}}


@extends('layouts.default', ['title' => 'Contact'])

@section('content')

	<div class="container">
		
		<div class="row justify-content-md-center">
			<div class="col-md-8 col-sd-10">
				<h2>Get in touch</h2>
				<p class="text-muted">If you having trouble with this service, please <a href="mailto:{{ config('laracarte.admin_support_email') }}">ask for help</a>.</p>

				<form action="{{ route('contact_path') }}" method="POST" class="needs-validation" novalidate>

					{{ csrf_field() }}
					
					<div class="form-group">
						<label for="name" class="control-label">Name</label>
						<input type="text" name="name" id="name" class="form-control" required="required" value="{{ old('name') }}">
						{!! $errors->first('name', '<span class="help-block">:message</span>') !!}
					</div>

					<div class="form-group">
						<label for="email" class="control-label">Email</label>
						<input type="email" name="email" id="email" class="form-control" required="required" value="{{ old('email') }}">
						{!! $errors->first('email', '<span class="help-block">:message</span>') !!}
					</div>

					<div class="form-group">
						<label for="message" class="control-label sr-only">message</label>
						<textarea name="message" id="message" cols="30" rows="10" class="form-control" required="required"> {{ old('message') }}</textarea>
						{!! $errors->first('message', '<span class="help-block">:message</span>') !!}
					</div>

					<div class="form-group">
						<button class="btn btn-secondary btn-block">Submit Enquiry &raquo;</button>
					</div>

				</form>

			</div>
		</div>

	</div>

@endsection