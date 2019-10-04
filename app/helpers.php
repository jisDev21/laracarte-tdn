<?php

	if(! function_exists('page_title')) {

		function page_title($title){

			$base_title = config('app.name') . ' - List of artisans';

			if($title == '') {
				return $base_title;
			} else {
				return $title . ' | '. $base_title;
			}
		}
	}



	// ici, un helper pour donner la classe "active" au bouton de menu cliqué
	if(! function_exists('set_active_route')) {

		function set_active_route($route) {
			// si on se trouve au niveau de cette route, alors on renvoie 'active' sinon on renvoie 
			// une chaine de caractères vide
			return Route::is($route) ? 'active' : '';
		}
	}