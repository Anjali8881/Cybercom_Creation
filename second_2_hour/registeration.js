function registerNow(){

    //store the value from the registration form into the variables
	var adminName = document.getElementById('adminName').value;
	var adminEmail = document.getElementById('adminEmail').value;
	var adminPassword = document.getElementById('adminPassword').value;				
	var adminConfirmPassword = document.getElementById('adminConfirmPassword').value;
	var adminCity = document.getElementById('adminCity').value;
	var adminState = document.getElementById('adminState').value;
	var checkBoxTerms = document.getElementById('termsandcondition');
    var registerAdmin = document.getElementById('registerbutton');
    
        //condition to check whether the registeration button clicked or not
		if(registerAdmin){
        
        //condition to check whether the password or confirm password are same or not
		if(adminPassword === adminConfirmPassword){
            console.log('Both password are same');
            
            //condition to check is the admin is already registered or not 
			if(localStorage.getItem('AdminRegistrationDetails')){
				//document.getElementById('registerbutton').style.display ='none';
				alert('Admin Already Registered');
				window.open ("login.html");
            }
            
            //if admin is not registered then the admin value are store in the object of admin Details
			else{
				
				var adminDetails = {
					name : adminName,
					email : adminEmail,
					password : adminPassword,
					city : adminCity,
					state : adminState
                };
                
                //after storing the admin details in object we will set that value on local storage

				localStorage.setItem('AdminRegistrationDetails',JSON.stringify(adminDetails));
				window.open("login.html");

			}
        }
        
        //condition apply when password and confirm password are not match
		else{
			console.log('Unmatch password');
			alert("Both password should be same");
		}}
}