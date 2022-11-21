<?php
require 'config.php';
require 'app/helpers.php';

require 'app/Task.php';

$tasks = fetchAllTask(connectDB($config));
$greeting = greet();

//echo great();

//$user = "debian-sys-maint";
//$pass = "2TgF0Sl0Meh3le4E";