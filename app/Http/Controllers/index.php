<?php

use Framework\App;

$tasks = App::get('database')->selectAll('tasks');

$greeting = 'Sóc Cinta Zaragoza, benvingut a la meva pàgina';

//dd($greeting);

require  '../resources/views/index.blade.php';



//$user = "debian-sys-maint";
//$pass = "2TgF0Sl0Meh3le4E";
//crear taula users i omplir en usuaris