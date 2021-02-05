<?php

$hostname = 'localhost';
$userName='root';
$password = 'root';
$dbName = 'phpdb_practice';

$conn = mysqli_connect($hostname,$userName,$password,$dbName);

if(!$conn){
    die('Could not connect');
}

?>