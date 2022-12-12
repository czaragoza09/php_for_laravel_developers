<?php

use Framework\App;


#require 'config.php';
#require 'app/Models/Task.php';


$tasks = App::get('database')->selectAll('tasks');

//$tasks = Task::selectAll('tasks'); ->Laravel Eloquent
$greeting = greet();
require  'resources/views/index.blade.php';



//$user = "debian-sys-maint";
//$pass = "2TgF0Sl0Meh3le4E";
