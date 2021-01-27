<?php

function hasSpace($string){
    if(preg_match('/ /',$string)){
        return true;
    }else{
        return false;
    }
}

$string = 'Hello everyone how are you';
if(hasSpace($string)){
    echo 'Has atleast one space';
}else{
    echo 'No space in string';
}

?>