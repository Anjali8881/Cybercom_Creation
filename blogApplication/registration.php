<!DOCTYPE html>
<html>
    <head>
        <title>Blog application</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>

    <body>

    <?php
    
    require 'connection.php';
    require 'core.php';

    if(!loggedIn()){
        if(isset($_POST['prefix']) && isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['password']) && isset($_POST['cpassword']) && isset($_POST['information']) && isset($_POST['agree'])){
            date_default_timezone_set('Asia/Kolkata');
            $time = time();

            $prefix = $_POST['prefix'];
            $fName = $_POST['fname'];
            $lName = $_POST['lname'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $password = $_POST['password'];
            $confirm_password = $_POST['cpassword'];
            $info = $_POST['information'];
            $current_time = date('Y-m-d h:i:sa',$time);
            $login = $current_time;
            $createdAt = $current_time;
            $updatedAt = $current_time;
            
            if(!empty($prefix) &&  !empty($fName) && !empty($lName) &&  !empty($email) &&  !empty($phone) && !empty($password) && !empty($confirm_password) && !empty($info) ){
                if($password != $confirm_password){
                    echo 'Password not match';
                }else{
                    $query = "select `first_name` from user where `first_name` = '$fName'";
                    $result = mysqli_query($conn,$query);

                    if(mysqli_num_rows($result) == 1){
                        echo $fName."Already Registered";
                    }else{
                        $hashPassword = md5($password);
                        $query2 = "insert into `user` (prefix,first_name,last_name,mobile,email,password_hash,last_login_at,information,created_at,updated_at)  values('".$prefix."','". $fName."','".$lName."','". $phone."','". $email."','". $hashPassword."','". $login."','". $info."','". $createdAt."','". $updatedAt."')";
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
        <div class="registrationdiv">
            <span class="spantext"><center>REGISTER</center></span><br><br><br>
            <form class="form" action="registration.php" method="POST">
                <table>
                    <tr>
                        <td><label for="prefix">Prefix</label>&nbsp;</td>
                        <td><select name="prefix" id="prefix" class="selectinput">
                            <option value="select one prefix">Select prefix</option>
                            <option value="mr.">Mr.</option>
                            <option value="miss">Miss</option>
                            <option value="mrs.">Mrs.</option>
                        </select>&nbsp;<span class="error">*<br><label id="prefixErr"></label></span></td>
                    </tr>

                    <tr></tr>
                    <tr></tr>
                    <tr></tr>

                    <tr>
                        <td><lable for="fname">First Name</label>&nbsp;</td>
                        <td><input type="text" name="fname" id="fname" class="registrationinput">&nbsp;<span class="error">*<br><label id="fnameErr"></label></span></td>
                    </tr>

                    <tr></tr>
                    <tr></tr>
                    <tr></tr>

                    <tr>
                        <td><lable for="lname">Last Name</label>&nbsp;</td>
                        <td><input type="text" name="lname" id="lname" class="registrationinput">&nbsp;<span class="error">*<br><label id="lnameErr"></label></span></td>
                    </tr>

                    <tr></tr>
                    <tr></tr>
                    <tr></tr>

                    <tr>
                        <td> <lable for="email">Email</label>&nbsp;</td>
                        <td> <input type="email" name="email" id="email" class="registrationinput">&nbsp;<span class="error">*<br><label id="emailErr"></label></span></td>
                    </tr>

                    <tr></tr>
                    <tr></tr>
                    <tr></tr>

                    <tr>
                        <td><lable for="phone">Mobile Number</label>&nbsp;</td>
                        <td> <input type="text" name="phone" id="phone" class="registrationinput">&nbsp;<span class="error">*<br><label id="phoneErr"></label></span></td>
                    </tr>

                    <tr></tr>
                    <tr></tr>
                    <tr></tr>

                    <tr>
                        <td><label for="password">Password</label>&nbsp;</td>
                        <td><input type="password" id="password" name="password" class="registrationinput">&nbsp;<span class="error">*<br><label id="passErr"></label></span></td>
                    </tr>

                    <tr></tr>
                    <tr></tr>
                    <tr></tr>

                    <tr>
                        <td><label for="cpassword"> Confirm Password</label>&nbsp;</td>
                        <td><input type="password" id="cpassword" name="cpassword" class="registrationinput">&nbsp;<span class="error">*<br><label id="cpassErr"></label></span></td>
                    </tr>

                    <tr></tr>
                    <tr></tr>
                    <tr></tr>

                    <tr>
                        <td><label for="information">Information</label>&nbsp;</td>
                        <td><textarea id="information" name="information" rows="4" cols="33" ></textarea>&nbsp;<span class="error">*<br><label id="infoErr"></label></span></td>
                    </tr>

                    <tr></tr>
                    <tr></tr>
                    <tr></tr>

                    <tr>
                        <td colspan="2"><input class="inputcheck" type="checkbox" id="agree" name="agree">Hereby, I accept Terms & conditions .<span class="error">*<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <label id="agreeErr"></label></span></td>
                    </tr>

                    <tr></tr>
                    <tr></tr>
                    <tr></tr>
                    <tr></tr>
                    <tr></tr>
                    <tr></tr>
                    <tr></tr>
                    <tr></tr>
                    <tr></tr>
                    <tr></tr>
                    <tr></tr>
                    <tr></tr>
                    <tr></tr>
                    <tr></tr>
                    <tr></tr>

                    <tr>
                        <td colspan="2" ><center><input class="button" type="submit" id="redistered" name="registered" value="Submit" onclick="return onregistervalidate()"></td>
                    </tr>

                </table>
            </form>
        </div>
    <script src="js/script.js"></script>
    <?php
    }elseif(loggedIn()){
        echo "You are already logged in";
    }
        
    
    ?>
    </body>
</html>
