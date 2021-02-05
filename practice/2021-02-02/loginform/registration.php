<!DOCTYPE html>

<html>
    <head>
        <title></title>
    </head>
    <body>
    <?php
    
    require 'connection.php';
    require 'core.php';

    if(!loggedIn()){
        if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['confirmpassword']) && isset($_POST['fname']) && isset($_POST['lname'])){
            $username = $_POST['username'];
            $password = $_POST['password'];
            $confirm_password = $_POST['confirmpassword'];
            $fName = $_POST['fname'];
            $lName = $_POST['lname'];

            if(!empty($username) && !empty($password) && !empty($confirm_password) && !empty($fName) && !empty($lName)){
                if($password != $confirm_password){
                    echo 'Password not match';
                }else{
                    $query = "select `user_name` from user_login_details where `user_name` = '$username'";
                    $result = mysqli_query($conn,$query);

                    if(mysqli_num_rows($result) == 1){
                        echo $username."Already Registered";
                    }else{
                        $hashPassword = md5($password);
                        $query2 = "insert into `user_login_details`(user_name, user_password, firstname, lastname)  values('".$username."','".$hashPassword."','".$fName."','".$lName."')";
                        if(mysqli_query($conn,$query2)){
                            echo 'Data inserted succesfully';
                        }else{
                            echo 'Problem while inserting data';
                        }
                    }
                }
            }else{
                echo 'All fields are required..Please fill all the fields';
            }
        }
    ?>

        <form action="registration.php" method="POST">
            Username: <input type="text" name="username"><br><br>
            Password: <input type="password" name="password"><br><br>
            Confirm password: <input type="password" name="confirmpassword"><br><br>
            First Name: <input type="text" name="fname"><br><br>
            Last Name: <input type="text" name="lname"><br><br>
            <input type="submit" name="register" value="Register Now">
        </form>
    
    <?php
    }elseif(loggedIn()){
        echo "You are already logged in";
    }
        
    
    ?>

    </body>
</html>