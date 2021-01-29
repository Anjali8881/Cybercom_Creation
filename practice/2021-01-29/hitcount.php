<?php

function hitcount(){
    $file_name = 'count.txt';
    $file_handle = fopen($file_name,'r');
    $current_value = fread($file_handle,filesize($file_name));
    fclose($file_handle);

    $current_value_inc = $current_value + 1;

    $file_handle = fopen($file_name,'w');
    fwrite($file_handle,$current_value_inc);
    fclose($file_handle);

}

hitcount(); 

?>