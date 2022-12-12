<?php


use Framework\App;

require 'vendor/autoload.php';

require 'Framework/bootstrap.php';



//URL
//ROUTE -> API redirect which uri ha demanat l'usuari -> obtenir controlador adequat i executar-lo
// /contact -> app/Http/Controllers/contact.php

//dd($SERVER['REQUEST_URI']); URI

//$routes = new Router();
//$routes->define($routes);
//$routes->redirect($_SERVER['REQUEST_URI']);

//FACADES -> IOC CONTAINER -> App (utilitzem directament el objecte)

App::get('router')->redirect($_SERVER['REQUEST_URI']);

//require 'app/index.php';

//require  'resources/views/index.blade.php';

#engantxar diferen ts fitxers en un sol fitxer de php