<table border="1" name="table">
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Subject</th>
        <th>Message</th>
    </tr>

<?php


if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['subject']) && isset($_POST['message'])) {
   
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    if(!empty($name) && !empty($email ) && !empty($subject) && !empty($message)){
        /*
        echo 'Your name is:- '.$name.'<br>';
        echo 'Your email address is:- '.$email.'<br>';
        echo 'Your subject is:- '.$subject.'<br>';
        echo 'Your message is:- '.$message;*/

        $conn = new mysqli('localhost','root','root','form_practice');
        $connection_error = 'Error in Connection';
        
        if(!$conn){
            die($connection_error);
        }else{
           /* $statement = $conn->prepare("Insert into form1(Name,Password,Address,Game,Gender,Age,File) values(?,?,?,?,?,?,?)");
            $statement->bind_param("sisssib",$name,$password,$address,$game,$gender,$age,$file);
            $statement->execute();
            echo "Data Insert Successfully";
            $statement->close();
            $conn->close();*/
            $query = "INSERT into `form4`(`name`,`email`,`subject`,`message`) values ('$name', '$email', '$subject', '$message')";
            $result = mysqli_query($conn, $query);

            if(!$result){
                echo '<script> alert ("Problem white inserting data!") </script>';
            }else{
               echo '<script> alert ("Data inserted successfully!") </script>';
            }
        }
    }else{
        echo 'Empty';
    }
}else{
    echo 'Not set';
}

$query = "SELECT `name`,`email`,`subject`,`message` from `form4`";
    if ($query_run = mysqli_query($conn, $query)) {
        if (mysqli_num_rows($query_run) == NULL) {
            echo '<script> alert ("No result found!")</script>';
        } else {
            while ($query_row = mysqli_fetch_assoc($query_run)) {
                $name = $query_row['name'];
                $email = $query_row['email'];
                $subject = $query_row['subject'];
                $message = $query_row['message'];
        
                echo ("<tr>");
                echo ("<td>$name</td>");
                echo ("<td>$email</td>");
                echo ("<td>$subject</td>");
                echo ("<td>$message</td>");
                echo ("</tr>");
            }
        }
    } else {
        echo mysqli_error('Error!');
    }


?>

</table>