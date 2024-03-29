<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	{{-- 1ere solution pour le titre dynamique:
		on récupère la variable 'title' passée par la vue fille, si elle existe

    		<title>{{ isset($title) ? $title . ' |' : '' }} Laracarte - List of artisans</title> 

		 2eme solution:
		on crée une fonction helpers qui va gérer ca.
		ensuite il suffit d'appeler cette fonction en lui passant en paramètre soit un titre, 
		s'il existe, soit rien.
		c'est la syntaxe ?? qui permet de dire, s'il y a un titre, on le passe à la fonction "page_title"
		sinon on lui passe une chaine de caractères vide
    --}}

    <title>{{ page_title( $title ?? '') }}</title>

    {{-- font google Open Sans --}}
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
	{{-- CDN font awesome --}}
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
	{{-- Bootstrap --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>
        body {
            font-family: 'open sans', helvetica, sans-serif;
        }

        footer {
            margin: 4em 0;
        }

        .active {
            background-color: #ccc;
        }
    </style>

</head>
<body>

{{-- 		<script>
           /*La fonction principale de ce script est d'empêcher l'envoi du formulaire si un champ a été mal rempli
            *et d'appliquer les styles de validation aux différents éléments de formulaire*/
           (function() {
             'use strict';
             window.addEventListener('load', function() {
               let forms = document.getElementsByClassName('needs-validation');
               let validation = Array.prototype.filter.call(forms, function(form) {
                 form.addEventListener('submit', function(event) {
                   if (form.checkValidity() === false) {
                     event.preventDefault();
                     event.stopPropagation();
                   }
                   form.classList.add('was-validated');
                 }, false);
               });
             }, false);
           })();
        </script> --}}


	@include('layouts/partials/_nav')

    @yield('content')

    @include('layouts/partials/_footer')

    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

    {{-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> --}}
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    @include('flashy::message')

</body>
</html>