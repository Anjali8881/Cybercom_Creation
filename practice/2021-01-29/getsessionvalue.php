<?php

session_start();

/*
if(isset($_SESSION['username'])  && isset($_SESSION['age'])){
    echo 'Welcome '.$_SESSION['username'].' Your age is '.$_SESSION['age'];
}else{
    echo 'Please login first';
}*/

echo 'Welcome '.$_SESSION['username'].' Your age is '.$_SESSION['age'];

?>