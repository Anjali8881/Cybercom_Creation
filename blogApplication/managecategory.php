<!DOCTYPE html>
<!--html strt-->
<html lang="en">

  <!--head start-->
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      
      <title>Blog Post Application</title>
      <link rel="stylesheet" href="css/style.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <!-- Bootstrap cdn's-->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="css/jquery.datetimepicker.min.css">
      
  </head>
  <!--head close-->

<!-- Body Starts-->
    <body>
      <!--Header of the page -->

        <header>
            <!-- Navigation Bar At top -->
            <nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#425b89">
                <a class="navbar-brand pl-5" href="#" id="top">Blog Post Application</a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
            
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                      <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Manage Category</a>
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
        <!--Header Close-->

        <!-- Main content of page -->

        <!--section 1 start-->
        <section>
            <div class="container mt-5 w-100 h-100">
                <h4 class="text-muted text-weight-bold grey-text">Blog Category</h4>
                <hr>
                <button type = "button" class="btn success" data-toggle="modal" data-target="#myCategoryModal">Add Category</button><br>

                <br>
                <div id="records_category_content">
                    
                </div>


                <!--The Modal-->
                <div class="modal" id="myCategoryModal">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <!--Modal Header-->
                            <div class="modal-header">
                                <h4 class="modal-title text-danger">Add New Category</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>

                            <!--Modal body-->
                            <div class="modal-body">
                                <div class="form-group">
                                    <label>Title</label>
                                    <input type="text" name="title" id="title" class="form-control" placeholder="Enter Category Title">
                                </div>

                                <div class="form-group">
                                    <label>Content</label>
                                    <input type="text" name="content" id="content" class="form-control" placeholder="Enter Category Content">
                                </div>

                                <div class="form-group">
                                    <label>URL</label>
                                    <input type="text" name="url" id="url" class="form-control" placeholder="Enter Category url">
                                </div>

                                <div class="form-group">
                                    <label>Meta Title</label>
                                    <input type="text" name="metatitle" id="metatitle" class="form-control" placeholder = "Enter Meta Title">
                                </div>

                                <div class="form-group">
                                    <label for="categorysel">Parent Category</label>
                                    <select class="form-control" id="categorysel" name="categorysel">
                                    </select>
                                </div>   

                                <div class="form-group">
                                    <input id="upload" type="file"  class="form-control" name="upload">
                                </div>
                        </div>

                        <!--Modal footer-->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-success" data-dismiss="modal" id="btnSubmit">Add Category </button> <!-- onclick="addRecord()"-->
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            </section>
            <!--section 1 close-->

            <!--Update Modal-->

                <!--The Modal-->
                <!--section 2 start for Edit Modal-->
                <section>
             <div class="container mt-5 w-100 h-100">
                <div class="modal" id="updateModal">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <!--Modal Header-->
                            <div class="modal-header">
                                <h4 class="modal-title text-danger">Update Blog Category Details</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>

                            <!--Modal body-->
                            <div class="modal-body">


                                <div class="form-group">
                                    <label>Category ID</label>
                                    <input type="text" name="upd_categoryid" id="upd_categoryid" class="form-control" >
                                </div>

                                <div class="form-group">
                                    <label>Category Image</label>
                                    <input type="text" name="upd_categoryImage" id="upd_categoryImage" class="form-control" >
                                </div>

                                <div class="form-group">
                                    <label>Category Name</label>
                                    <input type="text" name="upd_categoryName" id="upd_categoryName" class="form-control" >
                                </div>

                                <div class="form-group">
                                    <label>Created Date</label>
                                    <input type="text" name="upd_createddate" id="upd_createddate" class="form-control">
                                </div>

                        </div>

                        <!--Modal footer-->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-success" data-dismiss="modal" id="btnSubmit" onclick="updateuserdetail()">Update </button> <!-- onclick="addRecord()"-->
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            
                        </div>
                    </div>
                </div>

            </div>
 
        </section>
        <!--section 2 close for Edit Modal-->

                
        
                <script src='js/validation.js'></script>
                <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.3/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" ></script>
                <script type="text/javascript" src="js/jquery.datetimepicker.full.js"></script>
                <script type="text/javascript">



                        $(document).ready(function() {
                           
                            $('#upd_createddate').datetimepicker();
                            readRecords(); 
	
                        });

                        //readRecords function to fetxh data and display on the page
                        function readRecords(){
                            var categoryrecord = "categoryrecord";
                            $.ajax({
                                url: "insert_update_delete_category.php",
                                method:'POST',
                                data:{categoryrecord:categoryrecord},
                                success:function(data,status){
                                    $('#records_category_content').html(data);
                                }
                            });          
                        }

                    //edit function call
            function GetUserDetails(id){
                
                

                $.post("insert_update_delete_category.php",{id:id},function(data,status){
                    console.log(data);
                    var user = JSON.parse(data);
                    console.log("USer in edit JSon",user);
                    $('#upd_categoryid').val(user.id);
                    $('#upd_categoryImage').val(user.image);
                    $('#upd_categoryName').val(user.title);
                    $('#upd_createddate').val(user.created_at);
                    
                }); 

                $('#updateModal').modal('show');
            }

            //function to update user values
            function updateuserdetail(){

                console.log('inside update detail');
                var categoryidupd = $('#upd_categoryid').val();
                var imageupd = $('#upd_categoryImage').val();
                var categorynameupd = $('#upd_categoryName').val();
                var createddateupd = $('#upd_createddate').val();


                $.post("insert_update_delete_category.php",{
                    categoryidupd:categoryidupd,
                    imageupd:imageupd,
                    categorynameupd:categorynameupd,
                    createddateupd:createddateupd
                },
                function(data,status){
                    $('#updateModal').modal('hide');
                    readRecords();
                });
            }

            //delete record call
            function DeleteUser(deleteid){
                console.log("inside delete");
                var conf = confirm("Are you sure ");
                if(conf == true){
                    $.ajax({
                        url : "insert_update_delete_category.php",
                        method:'POST',
                        data:{deleteid:deleteid},
                        success:function(data,status){
                            readRecords();
                        }
                    });
                }
            }


                    /*
                    //function to send form data to the bakened
                    $(document).ready(function(){
                        console.log("Inside ready");
                        $("#btnSubmit").click(function() {
                    
                        var title = $('#title').val();
                        var content = $('#content').val();
                        var url = $('#url').val();
                        var metatitle = $('#metatitle').val();
                        var categorysel = $('#categorysel').val();
                        var upload = $('#upload').val();
                            console.log("Inside Submit Fnc");
                        $.ajax({
                            
                            url:"insert_update_delete_category.php",
                            method:'POST',   //post
                            data: {title :title,
                                content: content,
                                url :url,
                                metatitle :metatile,
                                categorysel :categorysel,
                                upload: upload    
                            },

                            success:function(data,status){
                                readRecords();
                            
                            }

                        });
                    }
                    );
                    });*/

                </script>

    </body>
    <!--body close-->
</html>
<!--html close-->