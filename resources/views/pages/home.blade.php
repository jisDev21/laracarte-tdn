{{-- notre vue hérite de la vue \layouts\default.blade.php

		@extends('layouts.default')

	si on voulait que le titre de la fenetre web soit dynamique, on pourrait passer
	une variable "title" pour chacune des vues et récupérer cette variable dans la vue
	générale \layouts\default.blade.php

		@extends('layouts.default', ['title' => 'Home']) 

--}}

@extends('layouts.default', ['title' => 'Home'])



@section('content')

<h1 class="text-center">map here !!!</h1>

@endsection