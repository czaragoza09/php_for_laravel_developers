<?php

use Framework\App;

require 'app/helpers.php';

$tasks = App::get('database')::selectAll('tasks');

//$tasks = Database::selectAll('tasks'); //Crida estàtica -> sense new
//$tasks = Task::selectAll('tasks'); ->Laravel Eloquent
//$database = new Database(App::get('config')['database']); //-> //Utilitzem DI i container casi mai new
$greeting = greet();



//$user = "debian-sys-maint";
//$pass = "2TgF0Sl0Meh3le4E";
