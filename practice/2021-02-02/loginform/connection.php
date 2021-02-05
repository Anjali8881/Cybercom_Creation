<?php

$hostname = 'localhost';
$userName = 'root';
$password = 'root';
$dbName  = 'user_db';
$connection_error = 'Error in connection';

$conn = mysqli_connect($hostname,$userName,$password,$dbName);

if(!$conn){
    die($connection_error);
}

?>