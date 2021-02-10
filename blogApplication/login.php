<!DOCTYPE html>
<html>
    <head>
        <title>Blog application</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>

    <body>

    <?php

        require 'connection.php';

        if(isset($_POST['email']) && isset($_POST['password'])){
            $email = $_POST['email'];
            $password = $_POST['password'];
            $hashPassword = md5($password);

            if(!empty($_POST['email']) && $_POST['password']){
                $query = "select id from user where email = '$email' and password_hash = '$hashPassword'";
                $result = mysqli_query($conn, $query);
                
                if($result){
                    $num_rows = mysqli_num_rows($result) ;

                    if($num_rows == 0){
                        echo 'Invalid email and password';
                    }else if($num_rows == 1){
                        while($query_result = mysqli_fetch_assoc($result)){
                            $user_id = $query_result['id'];
                        }

                        $_SESSION['user_id'] = $user_id;
                        header('Location : index.php');
                    }
                }
            }else{
                echo 'Please enter the details first';
            }
        }

    ?>
        <div class="maindiv">
            <span class="spantext"><center>Login</center></span><br><br>
            <form class="form" action="<?php echo $current_file; ?>" method ='post'>
                <label for="email">Email</label><br>
                <input type="email" name="email" id="email" class="input">&nbsp;<span class="error">*<br><label id="emailErr"></label></span><br><br>
                <label for="password">Password</label><br>
                <input type="password" name="password" id="password" class="input">&nbsp;<span class="error">*<br><label id="passErr"></label></span><br><br><br>
                <input type="submit" name="login" value="Login" id="login" class="button" onclick = "return onloginvalidate()">&nbsp;&nbsp;
                <input type="button" name="registration" value="Register" id="registration" class="button" onclick="window.location.href='registration.php'">
            </form>
        </div>
    <script src="js/script.js"></script>
    </body>
</html>