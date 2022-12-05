<?php

use Framework\App;
use Framework\Database\Connection;
use Framework\Database\Database;

//Laravel Service Providers
App::bind('config', require 'config.php');

App::bind('database', Database::make(
      Connection::make(App::get('config')['database'])
));

#$app =new App();
#$app->bind('config', require 'config.php');


//no seleciona la linia dels makes

//App::bind('database', DataBase::make(
//      Connection::make(App::get('config')['database'])
//));