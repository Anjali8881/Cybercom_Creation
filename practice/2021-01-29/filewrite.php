<?php

$file_handle = fopen('names.txt','w');

fwrite($file_handle,'Anjali'."\n");
fwrite($file_handle,'Vanshika');

fclose($file_handle);

echo 'Wriiten';

?>