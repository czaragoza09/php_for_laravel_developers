<?php

//QUERY STRING
//var_dump ($_GET['name']);

//$name = 'Cinta';
//API
function great() {
    $name = htmlspecialchars($_GET['name']);
    $surname = $_GET['surname'];

    return "Hola $name  $surname !";
}
$greeting = great();
//echo great();



//$greeting = 'Hola' . $_GET['name'] . ' '.  $_GET['surname'] . '!';

