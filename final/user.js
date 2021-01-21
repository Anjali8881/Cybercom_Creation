//array of user details
var userArray = [];

function updateUser()
{
    var userName = document.getElementById('username').value;
    var userEmail = document.getElementById('useremail').value;
    var userPassword = document.getElementById('userpassword').value;
    var userDob = document.getElementById('userdob').value;
    var userUpdateButton = document.getElementById('updateuser').value;

    if(userUpdateButton)
    {
            var userDetails = 
                {
                    username : userName,
                    useremail : userEmail,
                    userpassword : userPassword,
                    userdob: userDob,
                };

               /* if(userArray == null)
                {
                    document.getElementById("usertable").style.display = "none";
                }*/

                //check if any user already add or not
                if(localStorage.getItem('userArray'))
                {
                    userArray =JSON.parse(sessionStorage.getItem('userArray'))
                }

                //if not push the details
                userArray.push(userDetails);
                console.log(userArray);
                sessionStorage.setItem("userArray", JSON.stringify(userArray));  
                
                //to fecth user
                if(sessionStorage.getItem('userArray'))
                    {
                        userArray = sessionStorage.getItem('userArray');
                        var userlist = JSON.parse(userArray);
                        userArray = userlist;
                        document.write('<table border="2px" id = "usertable">');
                        document.write('<tr>');
                        document.write('<th>Name</th> <th>Email</th> <th>Password</th> <th>Birth Date</th> <th>Age</th> <th>Action</th></tr> <tr>');


                        for(var i=0;i<userArray.length;i++)
                            {
                                var age = new Date().getFullYear() - userArray[i].userdob;
                                document.write('<td>'+userArray[i].username+'</td>');
                                document.write('<td>'+userArray[i].useremail+'</td>');
                                document.write('<td>'+userArray[i].userpassword+'</td>');
                                document.write('<td>'+userArray[i].userdob+'</td>');
                                document.write('<td>'+ 2021-userArray[i].userdob+'</td>');
                                document.write('<td><input type="button" id="editbutton" name="editbutton" value="Edit"> <input type="button" id="deletebutton" name="deletebutton" value="Delete"> </td>')
                                document.write('</tr>');
                            }
                    }

                          
    }
}


