function checkvalidation(){
    var firstName = document.getElementById('fname').value;
    var lastName = document.getElementById('lname').value;
    var month = document.getElementById('month').value;
    var day = document.getElementById('day').value;
    var year = document.getElementById('year').value;
    var male = document.getElementById('male').checked;
    var female = document.getElementById('female').checked;
    var countryName = document.getElementById('country').value;
    var email = document.getElementById('email').value;
    var phoneNumber = document.getElementById('phone').value;
    var password = document.getElementById('password').value;
    var confirmPassword = document.getElementById('confirmpassword').value;
    var agreement = document.getElementById('agree').checked;
    var flag = false;
    var firstNameErr = lastNameErr = dobErr = genderErr = countryNameErr = emailErr = phoneNumberErr = passwordErr = confirmPasswordErr = agreementErr = '';

    if(firstName != ''){
        if(lastName != ''){
            if(month != 'month' && day!= 'day' && year != 'year'){
                if(male || female){
                    if(countryName != 'country'){
                        if(email.indexOf('@') > 0){
                            if(phoneNumber.length == 10){
                                if(password.length > 7){
                                    if(confirmPassword == password){
                                        if(agreement){
                                            flag = true;
                                            console.log('All fields are filled');
                                        }else{
                                            agreementErr = 'Please check the agreement first';
                                            document.getElementById('agreementErr').textContent = agreementErr;
                                        }
                                    }else{
                                        confirmPasswordErr = 'Password not match';
                                        document.getElementById('confirmpasswordErr').textContent = confirmPasswordErr;
                                    }
                                }else{
                                    passwordErr = 'Password must be greater than 7 characters';
                                    document.getElementById('passwordErr').textContent = passwordErr;
                                }
                            }else{
                                phoneNumberErr = 'Phone number should be of 10 digits';
                                document.getElementById('phoneErr').textContent = phoneNumberErr;   
                            }
                        }else{
                            emailErr = 'please write email in proper format';
                            document.getElementById('emailErr').textContent = emailErr;
                        }
                    }else{
                        countryNameErr = 'Please select one country name';
                        document.getElementById('countryErr').textContent = countryNameErr;
                    }
                }else{
                    genderErr = 'Select one gender';
                    document.getElementById('genderErr').textContent = genderErr;
                }
            }else{
                dobErr = 'Select date in proper format';
                document.getElementById('dobErr').textContent = dobErr;
            }
        }else{
            lastNameErr = 'Last Name is required';
            document.getElementById('lnameErr').textContent = lastNameErr;
        }
    }else{
        firstNameErr = 'First Name is required';
        document.getElementById('fnameErr').textContent = firstNameErr;
    }
return flag;
}