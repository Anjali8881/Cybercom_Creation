<?php

require 'connection.php';

//If condition to check data present in readrecords or not if present display it on the page in the table format
if(isset($_POST['blogpostrecord'])){

    //$data create table structure and display all the fields data on the page
    $data = '<table  class="table table-bordered table-striped">
                <tr>
                    <th class="bg-dark text-white">Post ID</th>
                    <th class="bg-dark text-white">Category Name</th>
                    <th class="bg-dark text-white">Title</th>
                    <th class="bg-dark text-white">Published Date</th>
                    <th class="bg-dark text-white">Edit Action</th>
                    <th class="bg-dark text-white">Delete Action</th>
                </tr>';

    //sql select query to fetch all the data from the database
    $displayquery = "select b.id,c.title as categoryName,b.title,b.published_at from category c inner join post_category pc on pc.category_id = c.id inner join blog_post b on b.id = pc.post_id ";
    $result = mysqli_query($conn,$displayquery);

    //condition to check data present in the result or not
    if(mysqli_num_rows($result) > 0){

        //loop for all the fetched data 
        while($row = mysqli_fetch_array($result)){
            $data .= '<tr>
                        <td>'.$row['id'].'</td>
                        <td>'.$row['categoryName'].'</td>
                        <td>'.$row['title'].'</td>
                        <td>'.$row['published_at'].'</td>
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
 ?>