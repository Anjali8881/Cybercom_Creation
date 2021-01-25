<?php
    $statement = 'Hello everyone how are you?';

    if(preg_match('/ /',$statement)){
        echo "Match found";
    }
    else{
        echo "Match not found";
    }
?>