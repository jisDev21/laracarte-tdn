{{-- dans cette vue, on récupère les variables passées par le mailable

	!! ne pas utiliser le mot "message" comme nom de variable, ça fait bugger !! 
--}}

<h1>{{ $name }}</h1> 
<hr>
<ul>
	<li>{{ $email }}</li>
	<li>{{ $msg }}</li>
</ul>

