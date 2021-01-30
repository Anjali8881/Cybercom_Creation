<?php

$to = 'anjalisharma.glsica16@gmail.com';
$subject = 'To test an Email';
$body = 'This ia an email Test<br><br>Hope you got it';
$headers = 'From: Anjali Sharma <someone@gmail.com>';

if(@mail($to,$subject,$body,$headers)){
    echo 'Email has been send to '.$to;
}else{
    echo 'There was an error sending the email';
}

?>