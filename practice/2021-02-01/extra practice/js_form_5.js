function validation(){
    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;
    var emailErr = passwordErr = '';
    var flag = false;

    if(email != ''){
        if(password.length > 7){
            flag = true;
            console.log('All fields are field');
        }else{
            passwordErr = 'Password must be greater than 7 characters';
            document.getElementById('passwordErr').textContent = passwordErr; 
        }
    }else{
        emailErr = 'This field is required';
        document.getElementById('emailErr').textContent = emailErr;
    }
return flag;
}