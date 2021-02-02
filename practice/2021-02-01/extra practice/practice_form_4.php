<?php


if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['subject']) && isset($_POST['message'])) {
   
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    if(!empty($name) && !empty($email ) && !empty($subject) && !empty($message)){
        echo 'Your name is:- '.$name.'<br>';
        echo 'Your email address is:- '.$email.'<br>';
        echo 'Your subject is:- '.$subject.'<br>';
        echo 'Your message is:- '.$message;
    }else{
        echo 'Empty';
    }
}else{
    echo 'Not set';
}

  

?>