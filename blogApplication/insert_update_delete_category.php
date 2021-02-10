<?php

require 'connection.php';

//If condition to check data present in readrecords or not if present display it on the page in the table format
if(isset($_POST['categoryrecord'])){

    //$data create table structure and display all the fields data on the page
    $data = '<table  class="table table-bordered table-striped">
                <tr>
                    <th class="bg-dark text-white">Category ID</th>
                    <th class="bg-dark text-white">Category Image</th>
                    <th class="bg-dark text-white">Category Name</th>
                    <th class="bg-dark text-white">Created Date</th>
                    <th class="bg-dark text-white">Edit Action</th>
                    <th class="bg-dark text-white">Delete Action</th>
                </tr>';

    //sql select query to fetch all the data from the database
    $displayquery = "select c.id,c.title,b.image,c.created_at from category c inner join post_category pc on pc.category_id = c.id inner join blog_post b on b.id = pc.post_id";
    $result = mysqli_query($conn,$displayquery);

    //condition to check data present in the result or not
    if(mysqli_num_rows($result) > 0){

        //loop for all the fetched data 
        while($row = mysqli_fetch_array($result)){
            $data .= '<tr>
                        <td>'.$row['id'].'</td>
                        <td>'.$row['image'].'</td>
                        <td>'.$row['title'].'</td>
                        <td>'.$row['created_at'].'</td>
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


/*
//insert user record into database
if(isset($_POST['title']) && isset($_POST['content']) && isset($_POST['url']) && isset($_POST['metatitle']) && isset($_POST['categorysel']) &&  isset($_POST['upload'])){

    $title = $_POST['title'];
    $content = $_POST['content'];
    $url = $_POST['url'];
    $metatitle = $_POST['metatitle'];
    $categorysel = $_POST['categorysel'];
    $upload = $_POST['upload'];

    if(!empty($title) && !empty($content) && !empty($url) && !empty($metatitle) && !empty($categorysel) && !empty($upload)){
        $query = "INSERT INTO `category`(`name`,`email`,`phone`,`title`,`createddate`) VALUES ('$name','$email','$phone','$title','$datetime')";

        if ($query_run = mysqli_query($conn, $query)) {
            echo 'Data inserted!';
        } else {
            echo 'Failed!';
        }
    }else {
        echo 'Please type something!';
    }


}*/


//get userid for update
if(isset($_POST['id']) && isset($_POST['id']) != ""){
    $user_id = $_POST['id'];
    $query = "SELECT * FROM category where id = '$user_id'";
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

//delete user record
if(isset($_POST['deleteid'])){
    $userid = $_POST['deleteid'];
    $deletequery = "delete from contact_details where id='$userid'";
    mysqli_query($conn,$deletequery); 
}

//update table
if(isset($_POST['categoryidupd'])){
    console.log('value set');
    $categoryidupd = $_POST['categoryidupd'];
    $imageupd = $_POST['imageupd'];
    $categorynameupd = $_POST['categorynameupd'];
    $createddateupd = $_POST['createddateupd'];
    $titleupd = $_POST['titleupd'];
    $datetimeupd = $_POST['datetimeupd'];

    $query = "select id from category where parent_category_id = (select parent_category_ud from category where title = 'Education' order by id);";
	$result = mysqli_query($conn,$query);
    $query2 = "update category set title = '$categorynameupd', content = '$content', url = '$url', metaTitle='$meta', parentCatgeoryId ='$result' where id = '$id' ";
	mysql_query($conn,$query2);
    
}

?>