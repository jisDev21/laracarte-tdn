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
    --}}

    <title>{{ page_title( $title ?? '') }}</title>

    {{-- font google Open Sans --}}
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
	{{-- CDN font awesome --}}
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
	{{-- Bootstrap --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


</head>
<body>

	@include('layouts/partials/_nav')

    @yield('content')

    @include('layouts/partials/_footer')

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

	<style>
		body {
			font-family: 'open sans', helvetica, sans-serif;
		}

		footer {
			margin: 4em 0;
		}
	</style>

</body>
</html>