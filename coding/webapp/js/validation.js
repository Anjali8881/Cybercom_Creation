function validatecreate(){
    var name = document.getElementById('name');
    var email = document.getElementById('email');
    var phone = document.getElementById('phone');
    var title = document.getElementById('title');
    var datetime = document.getElementById('datetime');

    var nameErr = emailErr = phoneErr = titleErr = datetimeErr =  '';
    var flag = false;

    if(name != ''){
        if(email != ''){
            if(phone.length = 10){
                if(title != ''){
                    if(datetime != ''){
                        flag = true;
                        console.log('All fields are filled');
                    }else{
                        datetimeErr = 'Required field';
                        alert(datetimeErr)
                    }
                }else{
                    titleErr = 'Required field';
                    alert(titleErr);
                }
            }else{
                phoneErr = 'Length must be of 10 digits';
                alert(phoneErr);
            }
        }else{
            emailErr = 'Required field';
            alert(emailErr);
        }
    }else{
        nameErr = 'Required field';
        alert(nameErr);
    }
return flag;
}