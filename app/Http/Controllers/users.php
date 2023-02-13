<?php

use Framework\App;

$users = App::get('database')->selectAll('users');

$greeting = 'Sóc Cinta Zaragoza, benvingut a la meva pàgina';

require '../resources/views/users.blade.php';
