<?php


use Framework\App;

$tasks = App::get('database')->selectAll('tasks');

$greeting = greet();

//dd($greeting);

require '../resources/views/tasks.blade.php';

