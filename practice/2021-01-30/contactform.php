<?php

if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])){
    $contact_name = $_POST['name'];
    $contact_email = $_POST['email'];
    $contact_message = $_POST['message'];

    if(!empty($contact_name) && !empty($contact_email) && !empty($contact_message)){
        $to = 'anjalisharma.glsica16@gmail.com';
        $subject = 'Contact form submitted';
        $body = $contact_name."\n".$contact_message;
        $headers = 'From: '.$contact_email;

        if(@mail($to,$subject,$body,$headers)){
            echo 'Thanks for contacting us';
        }else{
            echo 'Sorry an error occured . Please try again';
        }
    }else{
        echo 'All fields are required';
    }
}

?>

<form action="contactform.php" method="POST">
        Name:<br><input type="text" name="name" maxlength="25"><br><br>
        Email Address:<br><input type="email" name="email" maxlength="50"><br><br>
        Meassage:<br><textarea name="message" rows="10" cols="20" maxlength="1000"></textarea><br><br>
        <input type="submit" value="Send">
</form>
