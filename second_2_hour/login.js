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
        var registeredadmin = localStorage.getItem('AdminRegistrationDetails');

        //check whether the entered login details equal to the registeration details or not 
        if(adminLoginEmail == registeredadmin['email'] && adminLoginPassword == registeredadmin['password'])
        {
            //if its equal than admin redirect to the dashboard page
            window.open("Dashboard.html");
        }

        else{
            //if its not eqaul an alert will be display to notify that the admin should register first
            alert("Please Register first");
        }
    }

    //condition to check whether the register button clicked or not
    else if(adminRegisterButton)
    {
        //if it is clicked than admin redirect to the registeration page
        window.open('registeration.html');
    }
}