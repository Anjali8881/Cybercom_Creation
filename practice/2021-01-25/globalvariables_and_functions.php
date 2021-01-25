<?php
    $user_ip = $_SERVER['REMOTE_ADDR'];

    function ip_print(){
        global $user_ip;
        $string = 'Your ip address is: '.$user_ip;
        echo $string;
    }
    ip_print();
?>