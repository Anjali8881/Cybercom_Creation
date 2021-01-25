<?php
    $string_one = 'Hello I am Anjali Sharma';
    $string_two = 'Hello I am Aditya Sharma';

    similar_text($string_one,$string_two,$result);
    echo "The similarity between text is ".$result."<br>";
    echo strlen($string_one);
?>