function onloginvalidate(){
    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;
    var flag = false;
    var emailErr = passErr = '';

    if(email != ''){
        if(password.length < 32){
            flag = true;
            console.log("All fields filled");
        }else{
            passErr = "Password must be less than 32 characters";
            document.getElementById('passErr').textContent = passErr;
        }
    }else{
        emailErr = 'Email field is required';
        document.getElementById('emailErr').textContent = emailErr;
    }
return flag;
}

function onregistervalidate(){
    var prefix = document.getElementById('prefix').value;
    var firstName = document.getElementById('fname').value;
    var lastName = document.getElementById('lname').value;
    var email = document.getElementById('email').value;
    var mobileNumber = document.getElementById('phone').value;
    var password = document.getElementById('password').value;
    var confirmPassword = document.getElementById('cpassword').value;
    var information  = document.getElementById('information').value;
    var agree = document.getElementById('agree').checked;
    var flag = false;
    var prefixErr = fnameErr = lnameErr = regemailErr = mobilenumberErr = regpassErr = regcpassErr = infoErr = agreeErr = '';
    
    if(prefix != 'Select prefix'){
        if(firstName != ''){
            if(lastName != ''){
                if(email != ''){
                    if(mobileNumber.length = 10){
                        if(password != ''){
                            if(confirmPassword == password){
                                if(information != ''){
                                    if(agree){
                                        flag = true;
                                        console.log('All fields are filled');
                                    }else{
                                        agreeErr = 'Please checked the agreement';
                                        document.getElementById('agreeErr').textContent = agreeErr;
                                    }
                                }else{
                                    infoErr = 'This field is required';
                                    document.getElementById('infoErr').textContent = infoErr;
                                }
                            }else{
                                regcpassErr = 'Password not matched';
                                document.getElementById('cpassErr').textContent = regcpassErr;
                            }
                        }else{
                            regpassErr = 'This field is required';
                            document.getElementById('passErr').textContent = regpassErr;
                        }
                    }else{
                        mobilenumberErr = 'Number must be of 10 digits';
                        document.getElementById('phoneErr').textContent = mobilenumberErr;
                    }
                }else{
                    regemailErr = 'This field is required';
                    document.getElementById('emailErr').textContent = regemailErr;
                }
            }else{
                lnameErr = 'This field is required';
                document.getElementById('lnameErr').textContent = lnameErr;
            }
        }else{
            fnameErr = "This field is required";
            document.getElementById('fnameErr').textContent = fnameErr;
        }
    }else{
        prefixErr = "Select one prefix";
        document.getElementById('prefixErr').textContent = prefixErr;
    }
return flag;
}