<?php

require 'connection.php';
require 'core.php';

if(loggedIn()){
    echo 'You\'re logged in'."<br>";
    echo "<a href = 'logout.php'>Logout</a><br>";
    $name = getField('firstname');
    $lname = getField('lastname');
    echo $name.' '.$lname;
}else{
    include 'login.php';
}

?>