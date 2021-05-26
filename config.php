<?php

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'demo');

//coonect to the mysql database
$mysqli = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

//check connection
if ($mysqli === FALSE) {
    die("ERROR: Could not connect." . $mysqli->connect_error);
}
?>

