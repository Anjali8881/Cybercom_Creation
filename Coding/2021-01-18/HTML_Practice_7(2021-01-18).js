function add()
{
    var firstName = document.getElementById('firstname').value;
    var lastName = document.getElementById('lastname').value;
    var street = document.getElementById('street').value;
    var city = document.getElementById('city').value;
    var bio = document.getElementById('bio').value;
    var image = document.getElementById('image').value;
    var age = document.getElementById('age').value;
    var car = document.getElementById('car').value;
    var submit = document.getElementById('submit');

if(submit){
        
    if((firstName !== '') && (lastName !== '') && (street !== '') && (city !== '') && (bio !== '') && (image !== '') && (age !== '') && (car !== ''))
    {	
        
        window.open("success.html");
    }
    else{
        alert("Please fill all the details !");
    }

    
    }
}