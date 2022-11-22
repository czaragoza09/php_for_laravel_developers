<?php

use Framework\Database\Database;

require 'config.php';
require 'app/helpers.php';
//require 'app/Models/Task.php';
//require 'Framework/Database/Database.php';
//require 'Framework/Database/Connection.php';

//PDO -> DOP

//WISHFUL PROGRAMMING
$database = new Database($config); //-> //Utilitzem DI i container casi mai new
$tasks = $database->selectAll('tasks');

//$tasks = Database::selectAll('tasks'); //Crida estàtica -> sense new
//$tasks = Task::selectAll('tasks'); ->Laravel Eloquent
$greeting = greet();



//$user = "debian-sys-maint";
//$pass = "2TgF0Sl0Meh3le4E";