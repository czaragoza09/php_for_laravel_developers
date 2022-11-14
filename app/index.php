<?php

require 'app/helpers.php';

require 'app/Task.php';

//$task = new Task(1, 'comprar pa', 'a la panadería', 0);
//require 'config.php';



$user = "debian-sys-maint";
$pass = "2TgF0Sl0Meh3le4E";

//$user = $config['database']['user'];
//$pass = $config['database']['password'];
//$type = $config['database']['databasetype'];
//$host = $config['database']['host'];
//$name = $config['database']['host'];
//$dsn = "$type:host=$host;dbname=$name";


try {
    $dbh = new PDO('mysql:host=localhost;dbname=phplaraveldevs', $user, $pass);
} catch (\Exception $e) {
    echo "Error de connexió a la base de dades";
}

$statement = $dbh->prepare('SELECT * FROM tasks;');
$statement->execute();

$tasks = $statement->fetchAll(PDO::FETCH_CLASS, 'Task');

$greeting = greet();
//echo great();

