<?php

use Framework\App;
use Framework\Database\Database;

require 'config.php';
require 'app/Models/Task.php';

#require 'app/helpers.php';

$tasks = App::get('database')->selectAll('tasks');

//$tasks = Task::selectAll('tasks'); ->Laravel Eloquent
//$greeting = greet();



//$user = "debian-sys-maint";
//$pass = "2TgF0Sl0Meh3le4E";
