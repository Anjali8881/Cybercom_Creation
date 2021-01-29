<?php

$file_name = 'files.txt';

if(file_exists($file_name)){
    echo 'File Already exists';
}else{
    $file_handle = fopen($file_name,'w');
    fwrite($file_handle,'Hello How are you?');
    fclose($file_handle);
}

?>