<?php

require 'app/helpers.php';

require 'app/Task.php';


$task = new Task(1, 'comprar pa', 'a la panadería', 0);
//var_dump($task);

$user = 'debian-sys-maint';
$pass = '2TgF0Sl0Meh3le4E';

try{
    $dbh = new PDO('mysql:host=localhost;dbname=phplaraveldevs', $user, $pass);

} catch (\Exception $e) {
    echo 'Error de connexió a la BDD';
}

$statement = $dbh->prepare('SELECT * FROM task;');
$statement->execute();

$tasks = $statement->fetchAll(PDO::FETCH_CLASS, 'Task');
var_dump($tasks);

$greeting = greet();
//echo great();



//$greeting = 'Hola' . $_GET['name'] . ' '.  $_GET['surname'] . '!';
//QUERY STRING
//var_dump ($_GET['name']);
//$name = 'Cinta';
