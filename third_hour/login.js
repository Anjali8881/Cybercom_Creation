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
        //get the admin registeration details from the local storage
        if(localStorage.getItem('AdminRegistrationDetails'))
        {
            var registeredadmin = JSON.parse(localStorage.getItem('AdminRegistrationDetails'));
                    if(adminLoginEmail === registeredadmin.email )
                    {
                        if(adminLoginPassword === registeredadmin.password)
                        {
                        window.open('Dashboard.html');	
                        }
                        else
                        {
                            alert('Enter the correct password');
                        }
                    }
                    else if(localStorage.getItem('userLoginDetails'))
                    {
                            var userDetails = JSON.parse(localStorage.getItem('userLoginDetails'));
                            for(var i=0 ; i<userDetails.length();i++)
                            {
                                if(userEmail === userDetails.email)
                                {
                                    if(userPassword === userDetails.password)
                                    {
                                        window.open('User-dashboard.html');		
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
