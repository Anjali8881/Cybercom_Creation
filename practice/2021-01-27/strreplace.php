<?php

$find = array('hello','everyone','anjali','sharma','mca');
$replace = array('Hello','Everyone','Anjali','Sharma','MCA');
$string = 'hello everyone I am anjali sharma . anjali sharma pursuing mca';

$new_string = str_replace($find,$replace,$string);
echo $string."<br>";
echo $new_string;
?>