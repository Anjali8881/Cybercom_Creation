<?php

//$conn for the database connection
$conn = mysqli_connect('localhost','root','root','contact_db');

//If condition to check data present in readrecords or not if present display it on the page in the table format
if(isset($_POST['readrecord'])){

    //$data create table structure and display all the fields data on the page
    $data = '<table class="table table-bordered table-striped">
                <tr>
                    <th class="bg-dark text-white">ID</th>
                    <th class="bg-dark text-white">Name</th>
                    <th class="bg-dark text-white">Email</th>
                    <th class="bg-dark text-white">Phone</th>
                    <th class="bg-dark text-white">Title</th>
                    <th class="bg-dark text-white">Created Date</th>
                    <th class="bg-dark text-white">Edit Action</th>
                    <th class="bg-dark text-white">Delete Action</th>
                </tr>';

    //sql select query to fetch all the data from the database
    $displayquery = "SELECT * FROM `contact_details` ";
    $result = mysqli_query($conn,$displayquery);

    //condition to check data present in the result or not
    if(mysqli_num_rows($result) > 0){

        //loop for all the fetched data 
        while($row = mysqli_fetch_array($result)){
            $data .= '<tr>
                        <td>'.$row['id'].'</td>
                        <td>'.$row['name'].'</td>
                        <td>'.$row['email'].'</td>
                        <td>'.$row['phone'].'</td>
                        <td>'.$row['title'].'</td>
                        <td>'.$row['createddate'].'</td>
                        <td>
                            <button onclick="GetUserDetails('.$row['id'].')" class="btn btn-warning">Edit</button>
                        </td>
                        <td>
                            <button onclick="DeleteUser('.$row['id'].')" class="btn btn-danger">Delete</button>
                        </td>
                    </tr>';
        }
    }

    $data .='</table>';
        echo $data;
    
}

//insert user record into database
if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['title']) && isset($_POST['datetime'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $title = $_POST['title'];
    $datetime = $_POST['datetime'];

    if(!empty($name) && !empty($email) && !empty($phone) && !empty($title) && !empty($datetime)){
        $query = "INSERT INTO `contact_details`(`name`,`email`,`phone`,`title`,`createddate`) VALUES ('$name','$email','$phone','$title','$datetime')";

        if ($query_run = mysqli_query($conn, $query)) {
            echo 'Data inserted!';
        } else {
            echo 'Failed!';
        }
    }else {
        echo 'Please type something!';
    }


}


//delete user record
if(isset($_POST['deleteid'])){
    $userid = $_POST['deleteid'];
    $deletequery = "delete from contact_details where id='$userid'";
    mysqli_query($conn,$deletequery); 
}


//get userid for update
if(isset($_POST['id']) && isset($_POST['id']) != ""){
    $user_id = $_POST['id'];
    $query = "SELECT * FROM contact_details where id = '$user_id'";
    if(!$result = mysqli_query($conn,$query)){
        exit(mysqli_error());
    }

    $response = array();

    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            $response = $row;
        }
    }else{
        $response['status'] = 200;
        $response['message'] = "Data not found!";
    }

    echo json_encode($response);
}else{
    $response['status'] = 200;
    $response['message'] = 'Invalid Request!';
}


//update table
if(isset($_POST['hidden_user_idupd'])){
    console.log('value set');
    $hidden_user_idupd = $_POST['hidden_user_idupd'];
    $nameupd = $_POST['nameupd'];
    $emailupd = $_POST['emailupd'];
    $phoneupd = $_POST['phoneupd'];
    $titleupd = $_POST['titleupd'];
    $datetimeupd = $_POST['datetimeupd'];

    $query = "UPDATE `contact_details` SET `name` = '$nameupd', `email` = '$emailupd', `phone`= '$phoneupd', `title` = '$titleupd', `createddate`= '$datetimeupd' WHERE id = '$hidden_user_idupd'";
    if(!$result = mysqli_query($conn,$query)){
        exit(mysqli_error());
    }
}

?>