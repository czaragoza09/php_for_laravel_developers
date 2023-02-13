<?php


use Framework\App;

$tasks = App::get('database')->selectAll('tasks');

$greeting = 'Sóc Cinta Zaragoza, benvingut a la meva pàgina';

//dd($greeting);

require '../resources/views/tasks.blade.php';

