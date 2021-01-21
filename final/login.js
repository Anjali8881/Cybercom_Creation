function loginNow()
{
    //login detils store in the variable
    var adminLoginEmail = document.getElementById('loginEmail').value;
    var adminLoginPassword = document.getElementById('loginPassword').value;
    var adminLoginButton = document.getElementById('loginButton');
    var adminRegisterButton = document.getElementById('registerButton');

    //condition to check whether the login button clicked or not
    if(adminLoginButton)
    {
        //get the admin registeration details from the session storage
        if(sessionStorage.getItem('AdminRegistrationDetails'))
        {
            //variable to store data of admin
            var registeredadmin = JSON.parse(sessionStorage.getItem('AdminRegistrationDetails'));

                    //condition to check the username or email is same or not
                    if(adminLoginEmail === registeredadmin.email )
                    {
                        //condition to check password
                        if(adminLoginPassword === registeredadmin.password)
                        {
                        //if credentials match move to dashboard
                        window.open('Dashboard.html');	
                        }
                        else
                        {
                            //alert if password is incorrect
                            alert('Enter the correct password');
                        }
                    }

                    //this is for users
                    else if(sessionStorage.getItem('userLoginDetails'))
                    {
                            var userDetails = JSON.parse(sessionStorage.getItem('userLoginDetails'));
                            for(var i=0 ; i<userDetails.length();i++)
                            {
                                if(userEmail === userDetails.email)
                                {
                                    if(userPassword === userDetails.password)
                                    {
                                        window.open('Dashboard.html');		
                                    }
                                    else
                                    {
                                    alert('Enter the correct password');
                        
                                    }
                                }
                                    
                                
                                }
                            }
                    }
                    else
                    {
                        alert('Please register First');
                        
                    }
        
                }
                else if(adminRegisterButton)
                    {
                        window.open('registeration.html');
                    }
            }
