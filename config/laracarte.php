<?php

/* on crée ce fichier en guise de configuration. 
 * dans notre cas, on s'en sert pour définir le mail de l'admin support,
 * ce qui nous evitera de changer son adresse mail partout ou ce sera nécessaire.
 * on accède à cette valeur avec:
 *
 * 		config('laracarte.admin_support_email')
 */ 

return [

	// 'admin_support_email' => 'admin@laracarte.com'

	// on peut aussi une variable d'environnement
	
	'admin_support_email' => env('ADMIN_SUPPORT_EMAIL')

];