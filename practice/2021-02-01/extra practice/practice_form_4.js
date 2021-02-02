function checkvalidation(){
    var name = document.getElementById('name').value;
    var email = document.getElementById('email').value;
    var subject = document.getElementById('subject').value;
    var message = document.getElementById('message').value;
    var nameErr = emailErr = subjectErr = messageErr = '';
    var flag = false;

    if(name != ''){
        if(email != ''){
            if(subject != ''){
                if(message != ''){
                    flag = true;
                    console.log('All fields are field');
                }else{
                    messageErr = 'This field is required';
                    document.getElementById('messageErr').textContent = messageErr;
                }
            }else{
                subjectErr = 'This field is required';
                document.getElementById('subjectErr').textContent = subjectErr;
            }
        }else{
            emailErr = 'This field is required';
            document.getElementById('emailErr').textContent = emailErr;
        }
    }else{
        nameErr = 'This field is required';
        document.getElementById('nameErr').textContent = nameErr;
    }
return flag;
}