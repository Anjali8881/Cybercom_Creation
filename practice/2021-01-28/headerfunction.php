<h1>My Page</h1>
<?php

$redirect_page = "https://google.com";
$redirect = false;

if($redirect == true){
    header('Location: '.$redirect_page);
}

?>