function checkvalidation(){
    var name = document.getElementById('name').value;
    var password = document.getElementById('password').value;
    var male = document.getElementById('male').checked;
    var female = document.getElementById('female').checked;
    var address = document.getElementById('address').value;
    var month = document.getElementById('month').value;
    var day = document.getElementById('day').value;
    var year = document.getElementById('year').value;
    var hockey = document.getElementById("hockey").checked;
    var  football = document.getElementById("football").checked;
    var cricket = document.getElementById('cricket').checked;
    var volleyball = document.getElementById('volleyball').checked;
    var married = document.getElementById('married').checked;
    var unmarried = document.getElementById('unmarried').checked;
    var agree = document.getElementById('agree').checked;
    var flag = false;
    var nameErr = passwordErr = genderErr = addressErr = dobErr = gameErr = marritalStatusErr = agreementErr =  '';

    if(name != ''){
        if(password.length > 7){
            if(male || female){
                if(address != ''){
                    if(month != 'month' && day!= 'day' && year != 'year'){
                        if(hockey || football || cricket || volleyball){
                            if(married || unmarried){
                                if(agree){
                                    flag = true;
                                    console.log("All fields are field");
                                }else{
                                    agreementErr = "Check the agreemnt first";
                                    document.getElementById('agreeErr').textContent = agreementErr; 
                                }
                            }else{
                                marritalStatusErr = "Select one marrital status";
                                document.getElementById('marritalStatusErr').textContent = marritalStatusErr;
                            }
                        }else{
                            gameErr = 'Select atleast one game';
                            document.getElementById('gameErr').textContent = gameErr;
                        }
                    }else{
                        dobErr = 'Select proper date';
                        document.getElementById('birthdateErr').textContent = dobErr;
                    }
                }else{
                    addressErr = 'Give address detail';
                    document.getElementById('addressErr').textContent = addressErr;
                }
            }else{
                genderErr = 'Select one gender';
                document.getElementById('genderErr').textContent = genderErr;
            }
        }else{
            passwordErr = 'Password must be greater than 7 characters';
            document.getElementById('passwordErr').textContent = passwordErr;   
        }
    }else{
        nameErr = 'Name is required';
        document.getElementById('nameErr').textContent = nameErr;
    }
return flag;
}