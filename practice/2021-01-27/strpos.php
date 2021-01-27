<?php

$string = 'I am anjali sharma , I am 22 years old , I am pursuing MCA';
$find = 'am';
$find_length = strlen($find);
$offset = 0;

while($string_position = strpos($string,$find,$offset)){
    echo '<b>'.$find."</b> found at ".$string_position."<br>";
    $offset = $string_position+$find_length;
}
?>