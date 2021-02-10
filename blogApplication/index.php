<!DOCTYPE html>

<!--html start-->
<html lang="en">
  <!--head start--->
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      
      <title>Blog Post Application</title>

      <!--css link-->

      <link rel="stylesheet" href="css/style.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <!-- Bootstrap cdn's-->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
      <link rel="stylesheet" type="text/css" href="css/jquery.datetimepicker.min.css">
  </head>

<!-- Body Starts-->
  <body>
    <!--Header of the page -->

    <?php

        require 'connection.php';
        require 'core.php';

        if(loggedIn()){
            /*echo 'You\'re logged in'."<br>";
            $name = getField('first_name');
            $lname = getField('last_name');
            echo $name.' '.$lname;*/
        

    ?>

      <header>
              <!-- Navigation Bar At top -->
              <nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#425b89"> 
                  <a class="navbar-brand pl-5" href="#" >Blog Post Application</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                      <li class="nav-item active">
                        <a class="nav-link" href="#">Home<span class="sr-only">(current)</span></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="managecategory.php">Manage Category</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="myprofile.php">My Profile</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="logout.php">LogOut</a>
                      </li>
                    </ul>
                  </div>
                </nav>

      </header>

      <!--Header close-->

        <!--Main Content of the page-->
       
        <!--section of the main page start-->
        <section>
        <div class="container mt-5 w-100 h-100">
                <h4 class="text-muted text-weight-bold grey-text">Blog Post</h4>
                <hr>
                <button type = "button" class="btn success" data-toggle="modal" data-target="#myModal">Add Blog Post</button><br>

                <br>
                <div id="blog_records_content">
                    
                </div>


                <!--The Modal-->
                <div class="modal" id="myModal">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <!--Modal Header-->
                            <div class="modal-header">
                                <h4 class="modal-title text-danger">Add New Blog Post</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>

                            <!--Modal body-->
                            <div class="modal-body">
                                <div class="form-group">
                                    <label>Title</label>
                                    <input type="text" name="title" id="title" class="form-control" placeholder="Enter Title">
                                </div>

                                <div class="form-group">
                                    <label>Content</label>
                                    <input type="text" name="content" id="content" class="form-control" placeholder="Enter Content">
                                </div>

                                <div class="form-group">
                                    <label>URL</label>
                                    <input type="text" name="url" id="url" class="form-control" placeholder="Enter blog url">
                                </div>

                                <div class="form-group">
                                    <label>Published At</label>
                                    <input type="datetime-local" name="publisheddate" id="publisheddate" class="form-control" placeholder="Enter blog published Date">
                                </div>

                                <div class="form-group">
                                    <label for="selblogimage">Category</label>
                                    <select class="form-control" id="selblogimage">
                                    </select>
                                </div>      
                                <div class="form-group">
                                    <input id="upload" type="file"  class="form-control" name="upload">
                                </div>
                        </div>

                        <!--Modal footer-->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-success" data-dismiss="modal" id="btnSubmit" >Add Blog</button> <!-- onclick="addRecord()"-->
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--section of the main page close-->
       
      <!--<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>-->
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.3/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" ></script>
      <script type="text/javascript" src="js/jquery.datetimepicker.full.js"></script>
      <script type="text/javascript">

                        $(document).ready(function(){
                            readRecords();
                        });

                        //readRecords function to fetxh data and display on the page
                        function readRecords(){
                            var blogpostrecord = "blogpostrecord";
                            $.ajax({
                                url: "insert_update_delete_blog.php",
                                method:'POST',
                                data:{blogpostrecord:blogpostrecord},
                                success:function(data,status){
                                    $('#blog_records_content').html(data);
                                }
                            });          
                        }
        </script>
      
      <?php }

        else{
            include 'login.php'; 
        }
    ?>

  </body>
  <!--body close-->

</html>
<!--html close-->
