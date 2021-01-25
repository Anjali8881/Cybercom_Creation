<?php
    $string = "Hello everyone I am Anjali Sharma";
    $string_shuffled = str_shuffle($string);
    //$string_half = substr($string_shuffled,0,strlen($string)/2);
    echo $string_shuffled."<br>";
    $string_reversed = strrev($string);
    echo $string_reversed;

?>