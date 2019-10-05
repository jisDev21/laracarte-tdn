{{-- Laravel possede ses propres pages d'erreurs pour gérer les exceptions:
	\vendor\laravel\framework\src\Illuminate\Foundation\Exceptions\views
	on peut bien sur créer nos propres pages d'erreur. 
	on peut aussi faire en sorte que nos pages d'erreur héritent des pages d'erreur
	par defaut de laravel.
	du coup, pour créer notre page 404, il suffira d'écrire:
--}}

@extends('errors::layout')

@section('title', 'Erreur 404')

@section('message', 'Désolé, la page demandée n\'a pu être trouvée...')

{{-- bien sur, on peut gérer nos pages d'erreur comme on veut, en utilisant ou pas 
	les pages d'erreur par defaut de laravel.
	on aurait même pu récupérer le layout des pages d'erreur par defaut de laravel
	pour créer notre layout et les vues qui en héritent 
--}}