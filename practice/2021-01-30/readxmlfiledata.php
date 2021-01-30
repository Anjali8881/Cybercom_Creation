<?php

$xml_file = simplexml_load_file('producer_details.xml');

foreach($xml_file->producer as $producer){
    echo $producer->name.' is '.$producer->age.'years old.<br>';
    foreach($producer->birthday as $birthdetail){
        echo 'The Birthdate of '.$producer->name.' is '.$birthdetail->date.'/'.$birthdetail->month.'/'.$birthdetail->year.'.<br><br>';
    }
}

?>