<?php
require 'config.php';
require 'app/helpers.php';

require 'app/Task.php';

$dbh = connectDB($config);


$statement = $dbh->prepare('SELECT * FROM tasks;');
$statement->execute();

$tasks = $statement->fetchAll(PDO::FETCH_CLASS, 'Task');

$greeting = greet();
//echo great();

//$user = "debian-sys-maint";
//$pass = "2TgF0Sl0Meh3le4E";