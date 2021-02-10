<?php

require 'connection.php';
ob_start();
session_start();
$current_file = $_SERVER['SCRIPT_NAME'];
if(isset($_SERVER['HTTP_REFERER']) && !empty($_SERVER['HTTP_REFERER'])){
    $http_referer = $_SERVER['HTTP_REFERER'];
}

function loggedIn(){
    if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])){
        return true;
    }else{
        return false;
    }
}

function getField($field){
    global $conn;
    $query = "select `".$field."` from user where id ='".$_SESSION['user_id']."'";

    $result = mysqli_query($conn,$query);

    if($result){
        while($query_row = mysqli_fetch_assoc($result)){
            $name = $query_row[$field];
            echo $name;
        }
    }
}

?>