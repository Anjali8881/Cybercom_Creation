/*4. Create one html form that contain the below fields,

o Name, Email, Date of birth.

o On click of submit button, Store the data as object in one single array. (array will be same for all records)

o Display the data in one table format another page that is, view.html*/

var studentArr = [];



function add()
{
    if(submit)
    {
        var username = document.getElementById('name').value;
        var useremail = document.getElementById('email').value;
        var userdob = document.getElementById('dob').value;

        

       var  studentObject = 
        {
            name : username,
            email : useremail,
            DateOfBirth : userdob
        };

        if(localStorage.getItem('studentArr'))
        {
    studentArr =JSON.parse(localStorage.getItem('studentArr'))
        }

        studentArr.push(studentObject);
        console.log(studentArr);
        localStorage.setItem("studentArr", JSON.stringify(studentArr));

        /*
        localStorage.setItem('username',person['name']);
        localStorage.setItem('useremail',person['email']);
        localStorage.setItem('userdob',person['DateOfBirth']);*/
        
        
    }

}