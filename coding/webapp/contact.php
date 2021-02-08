<!DOCTYPE html>
<!--html strt-->
<html lang="en">

  <!--head start-->
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      
      <title>Contact || Contact From Application</title>
      <link rel="stylesheet" href="css/style.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <!-- Bootstrap cdn's-->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
      
  </head>
  <!--head close-->

<!-- Body Starts-->
    <body>
      <!--Header of the page -->

        <header>
            <!-- Navigation Bar At top -->
            <nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#425b89">
                <a class="navbar-brand pl-5" href="#" id="top">Contact Form Application</a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
            
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                      <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item active">
                      <a class="nav-link" href="contact.php">Contact</a>
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
                <h4 class="text-muted text-weight-bold grey-text">Create Contact</h4>
                <hr>
                <button type = "button" class="btn success" data-toggle="modal" data-target="#myModal">Create Contact</button><br>

                <br>
                <div id="records_content">
                    
                </div>


                <!--The Modal-->
                <div class="modal" id="myModal">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <!--Modal Header-->
                            <div class="modal-header">
                                <h4 class="modal-title text-danger">Contact Form Application</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>

                            <!--Modal body-->
                            <div class="modal-body">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" name="name" id="name" class="form-control" placeholder="Enter Name">
                                </div>

                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" name="email" id="email" class="form-control" placeholder="Enter Email">
                                </div>

                                <div class="form-group">
                                    <label>Phone</label>
                                    <input type="text" name="phone" id="phone" class="form-control" placeholder="Enter phone Number">
                                </div>

                                <div class="form-group">
                                    <label>Title</label>
                                    <input type="text" name="title" id="title" class="form-control" placeholder="Enter title">
                                </div>

                                <div class="form-group">
                                    <label>Created</label>
                                    <input type="datetime-local" name="datetime" id="datetime" class="form-control" >
                                </div>
                        </div>

                        <!--Modal footer-->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-success" data-dismiss="modal" id="btnSubmit" onclick="validatecreate()">Create </button> <!-- onclick="addRecord()"-->
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
                                <h4 class="modal-title text-danger">Update Contact Form Application</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>

                            <!--Modal body-->
                            <div class="modal-body">

                                <div class="form-group">
                                    <label>ID</label>
                                    <input type="text" name="name" id="upd_id" class="form-control" placeholder="Enter Name">
                                </div>

                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" name="name" id="upd_name" class="form-control" placeholder="Enter Name">
                                </div>

                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" name="email" id="upd_email" class="form-control" placeholder="Enter Email">
                                </div>

                                <div class="form-group">
                                    <label>Phone</label>
                                    <input type="text" name="phone" id="upd_phone" class="form-control" placeholder="Enter phone Number">
                                </div>

                                <div class="form-group">
                                    <label>Title</label>
                                    <input type="text" name="title" id="upd_title" class="form-control" placeholder="Enter title">
                                </div>

                                <div class="form-group">
                                    <label>Created</label>
                                    <input type="datetime-local" name="datetime" id="upd_datetime" class="form-control" >
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

      <script type="text/javascript">

            //readRecords function call to display record on the page
            $(document).ready(function(){
                readRecords();
            });

            //readRecords function to fetxh data and display on the page
            function readRecords(){
                var readrecord = "readrecord";
                $.ajax({
                    url: "insertcontact.php",
                    method:'POST',
                    data:{ readrecord:readrecord},
                    success:function(data,status){
                        $('#records_content').html(data);
                    }
                });          
             }

            //function to send form data to the bakened
            $(document).ready(function(){
                console.log("Inside ready");
                $("#btnSubmit").click(function() {
            
                var name = $('#name').val();
                var email = $('#email').val();
                var phone = $('#phone').val();
                var title = $('#title').val();
                var datetime = $('#datetime').val();
                    console.log("Inside Submit Fnc");
                $.ajax({
                    
                    url:"insertcontact.php",
                    method:'POST',   //post
                    data: {name :name,
                           email: email,
                           phone :phone,
                           title :title,
                           datetime :datetime    
                    },

                    success:function(data,status){
                        readRecords();
                       
                    }

                });
            }
            );
            });

            //delete record call
            function DeleteUser(deleteid){
                console.log("inside delete");
                var conf = confirm("Are you sure ");
                if(conf == true){
                    $.ajax({
                        url : "insertcontact.php",
                        method:'POST',
                        data:{deleteid:deleteid},
                        success:function(data,status){
                            readRecords();
                        }
                    });
                }
            }

            //edit function call
            function GetUserDetails(id){
                
                $('#hidden_user_id').val(id);

                $.post("insertcontact.php",{id:id},function(data,status){
                    console.log(data);
                    var user = JSON.parse(data);
                    console.log("USer in edit JSon",user);
                    $('#upd_id').val(user.id);
                    $('#upd_name').val(user.name);
                    $('#upd_email').val(user.email);
                    $('#upd_phone').val(user.phone);
                    $('#upd_title').val(user.title);
                    $('#upd_datetime').val(user.createddate);
                }); 

                $('#updateModal').modal('show');
            }

            //function to update user values
            function updateuserdetail(){

                console.log('inside update detail');
                var hidden_user_idupd = $('#upd_id').val();
                var nameupd = $('#upd_name').val();
                var emailupd = $('#upd_email').val();
                var phoneupd = $('#upd_phone').val();
                var titleupd = $('#upd_title').val();
                var datetimeupd = $('#upd_datetime').val();

                

                /*console.log(nameupd);
                console.log(emailupd);
                console.log(phoneupd);
                console.log(titleupd);
                console.log(datetimeupd);
                console.log(hidden_user_idupd);*/

                $.post("insertcontact.php",{
                    hidden_user_idupd:hidden_user_idupd,
                    nameupd:nameupd,
                    emailupd:emailupd,
                    phoneupd:phoneupd,
                    titleupd:titleupd,
                    datetimeupd:datetimeupd
                },
                function(data,status){
                    $('#updateModal').modal('hide');
                    readRecords();
                });
            }

        </script>

    </body>
    <!--body close-->
</html>
<!--html close-->