<html>
    <head>
        <title>Form Practice</title>
        <style>
            .span{
                color: red;
            }
        </style>
    </head>

    <body>
        <?php
        $nameErr = $emailErr = $genderErr = $agreeErr = " ";
        $name = $email = $time = $classes = $gender = $subject = " ";

        if($_SERVER["REQUEST_METHOD"]=="POST"){
            if(isset($_POST['check'])){
                if(empty($_POST['name']) && empty($_POST['email']) && empty($_POST['time']) && empty($_POST['class']) && empty($_POST['gender']) && empty($_POST['subject'])){
                    $nameErr = "Name is required";
                    $emailErr  = "Email is required";
                    $email = $_POST['email'];
                    $time = ' ';
                    $classes = ' ';
                    $genderErr = "Gender is required";
                    $subject = ' ';
                }else{
                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $time = $_POST['time'];
                    $classes = $_POST['class'];
                    $gender = $_POST['gender'];
                    $subject = $_POST['subject'];
                }
            }else{
                $agreeErr =  "Please checked the agree block first";
            }
        }
            
        ?>
        <h1>Absolute classes Registeration</h1>
        <span class="span">* required</span>

        <form action="formpractice.php" method="POST">
            <table>
                <tr>
                    <td>Name:</td>
                    <td><input type="text" name="name"><span class="span">*<?php echo $nameErr; ?></span></td>
                </tr>

                <tr>
                    <td>Email:</td>
                    <td><input type="email" name="email"><span class="span">*<?php echo $emailErr; ?></span></td>
                </tr>

                <tr>
                    <td>Time:</td>
                    <td><input type="text" name="time"></td>
                </tr>

                <tr>
                    <td>Classes:</td>
                    <td><textarea name="class" rows="7" cols="30"></textarea></td>
                </tr>

                <tr>
                    <td>Gender:</td>
                    <td><input type="radio" name="gender" value="male">Male
                        <input type="radio" name="gender" value="female">Female
                        <span class="span">*<?php echo $genderErr; ?></span></td>
                </tr>

                <tr>
                    <td>Select:</td>
                    <td><select name="subject[]" size="4" multiple="multiple">
                        <option value="PHP">PHP</option>
                        <option value="JavaScript">JavaScript</option>
                        <option value="HTML">HTML</option>
                        <option value="Android">Android</option>
                        <option value="Java">Java</option>
                        <option value="IOS">IOS</option>
                    </select></td>
                </tr>

                <tr>
                    <td>Agree:</td>
                    <td><input type="checkbox" name="check" value="agree"><span class="span">*<?php echo $agreeErr; ?></span></td>
                </tr>

                <tr>
                    <td><input type="submit" name="submit" value="Submit"></td>
                </tr>
            </table>
        </form>

        <?php
        
        echo "<h2>Your given values are as follows:-</h2><br>";
        echo "<span>Your name is ".$name."</span><br>";
        echo "<span>Your email address is ".$email."</span><br>";
        echo "<span>Your class time is ".$time."</span><br>";
        echo "<span>Your class info  is ".$classes."</span><br>";
        echo "<span>Your gender is ".$gender."</span><br>";
        /*for($i=0 ; $i<count($subject); $i++){
            echo 'You selected '.$subject[$i].' subject <br>';
        }*/

        foreach($subject as $sub){
            echo 'You selected '.$sub.' subject <br>';
        }

        
        ?>
    </body>
</html>