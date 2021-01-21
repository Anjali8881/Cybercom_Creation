var userArray = [];

function updateUser()
{
    var userName = document.getElementById('username');
    var userEmail = document.getElementById('useremail');
    var userPassword = document.getElementById('userpassword');
    var userDob = document.getElementById('userdob');
    var userUpdateButton = document.getElementById('updateuser');

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
                if(localStorage.getItem('userArray'))
                {
                    userArray =JSON.parse(localStorage.getItem('userArray'))
                }

                userArray.push(userDetails);
                console.log(userArray);
                localStorage.setItem("userArray", JSON.stringify(userArray));  
                
                if(localStorage.getItem('userArray'))
                    {
                        userArray = localStorage.getItem('userArray');
                        var userlist = JSON.parse(userArray);
                        userArray = userlist;
                        document.write('<table border="2px" id = "usertable">');
                        document.write('<tr>');
                        document.write('<th>Name</th> <th>Email</th> <th>Password</th> <th>Birth Date</th> <th>Age</th> <th>Action</th></tr> <tr>');


                        for(var i=0;i<userArray.length;i++)
                            {
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


