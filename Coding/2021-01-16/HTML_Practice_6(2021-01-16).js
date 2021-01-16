function addDetails(){
    var userName = document.getElementById('userName').value; 
    var userEmailId = document.getElementById('userEmailId').value;
    var userPhoneNo = document.getElementById('userPhoneNo').value;
    var userComments = document.getElementById('userComments').value;
    var submit = document.getElementById('submit'); 
    if(submit){
        
    if((userName !== '') && (userEmailId !== '') && (userPhoneNo !== '') && (userComments !== ''))
    {	
        if (!isNaN(userPhoneNo)){
        //console.log(userName);
        alert("Your request has been submitted !");
        //document.getElementById('name').innerHTML = userName;
        //console.log("All present");
    }
    else{
        alert("Enter a valid Phone no !");
    }
    }
    else{
        alert("Please fill all the details !");
    }
    }
    
    }
    