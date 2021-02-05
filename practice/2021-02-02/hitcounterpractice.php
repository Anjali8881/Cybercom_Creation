<?php

require 'connection_database.php';
$user_ip = $_SERVER['REMOTE_ADDR'];



function ip_exists($ip){
    global $conn;
    $query = "select ip from hit_ip where ipaddress = '$ip'";
    $result = mysqli_query($conn,$query);
    if(mysqli_num_rows($result) == 0){
        return false;
    }else{
        return true;
    }
}

function ip_add($ip){
    global $conn;
    $query = "insert into hit_ip(ipaddress) values('$ip')";
    if(mysqli_query($conn,$query)){
        echo 'Data inserted';
    }
}

function update_count(){
    global $conn;
    $query = "select count from hit_count";
    if($result = mysqli_query($conn,$query)){
        while($row = mysqli_fetch_array($result)){
            $count = $row['count'];
        }
        $count_inc = $count+1;
        $update_count = "update hit_count set count = '$count_inc'";
        if($result = mysqli_query($conn,$update_count)){
            echo 'Count updated';
        }
    }
}

/*if(!ip_exists($user_ip)){
    ip_add($user_ip);
    update_count();
}*/

if(!ip_exists($user_ip)){
    echo 'Doesnt exists';
}else{
    echo 'exists';
}
?>