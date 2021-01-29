<?php

$directory = 'files';

if($handle_dir = opendir($directory.'/')){
    echo 'Looking inside \' '.$directory.'\':<br>';

    while($file = readdir($handle_dir)){
        if($file!='.' && $file!='..'){
            echo '<a href="'.$directory.'/'.$file.'">'.$file.'</a><br>';
        }
    }
}

?>