<?php
/* Database credentials */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'my_db');
 
/* Attempting to connect to MySQL database (lets hope it connects :) */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Checking connection 
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>