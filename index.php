<?php


require 'vendor/autoload.php';

require 'Framework/bootstrap.php';

$routes = require 'routes.php';

//URL
//ROUTE -> API redirect which url ha demanat l'usuari -> obtenir controlador adequat i executar-lo
//dd($SERVER['REQUEST_URI']); URI
//$routes = new Router();
//$routes->define($routes);
//$routes->redirect($_SERVER['REQUEST_URI']);

require 'app/index.php';

require  'resources/views/index.blade.php';

#engantxar diferen ts fitxers en un sol fitxer de php