<?php

require 'getipfile.php';

foreach($ip_blocked as $ip){
    if($ip == $ip_address){
        die('Your ip '.$ip_address.' has been blocked');
    }
    
}

?>