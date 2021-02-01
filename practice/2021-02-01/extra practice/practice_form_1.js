function checkvalidation(){
    /*var name = document.getElementById('name').value;
    var password = document.getElementById('password').value;
    var address = document.getElementById('address').value;
    var cbxGameValues = document.getElementsByName('game');
    var gender = document.getElementsByName('gender');
   // var age = document.getElementById('age').value;
    var fileupload = document.getElementById('file').value;
    //var submit = document.getElementById('submit');
    var game = 0;
    var genderinc = 0;

    
       if(name == null || name == ""){
            alert('Name is required field');
            return false;
        }
        
        else if(password.length < 7){
            alert('Password atleast 7 characters long');
        }
       else if(address == null || address == "" ){
            alert("Address field is required");
        }
       for(var i=0;i<cbxGameValues.length;i++){
            if(cbxGameValues.item(i).checked == false){
                game++;
            }
        }
      if(game == cbxGameValues.length){
            alert("Select a game");
            return false;
        }
        for(var j=0;j<gender.length;j++){
            if(gender.item(j) == false){
                genderinc++;
            }
        }
        if(genderinc == gender.length){
            alert("Please select a gender");
            return false;
        }/*
        if(age == null || age == ""){
            alert('Please select an age');
            return false;
        }*//*
        if(fileupload == "")
        {
            alert("Please select a file");
            return false;
        }

        /*else{
            window.open('practice_form_1.php');
        }*/
        var name = document.getElementById('name').value;
        var password = document.getElementById('password').value;
        var address = document.getElementById('address').value;
        var hockey = document.getElementById("hockey").checked;
        var  football = document.getElementById("football").checked;
        var badminton = document.getElementById("badminton").checked;
        var cricket = document.getElementById('cricket').checked;
        var volleyball = document.getElementById('volleyball').checked;
        var male = document.getElementById('male').checked;
        var female = document.getElementById('female').checked;
        var age = document.getElementById('age').value;
        var fileUpload =document.getElementById('file').value;
        var submit = document.getElementById('submit');
        var nameErr = passwordErr = addressErr = gameErr = genderErr = ageErr = fileUploadErr = '';
        var flag = false;

        
           if(name != ''){
               if(password.length > 7){
                   if(address !== ''){
                       if(hockey || football || badminton || cricket || volleyball){
                           if(male || female){
                               if(age != 'select'){
                                   if(fileUpload !== ''){   
                                       flag = true;
                                       console.log('All fields are filled');
                                       //window.location.href = 'practice_form_1.php';
                                   }else{
                                       fileUploadErr = "Please select one file first";
                                       document.getElementById('fileErr').textContent = fileUploadErr;
                                   }
                               }else{
                                   ageErr = "Please select one age";
                                   document.getElementById('ageErr').textContent = ageErr;
                               }
                           }else{
                               genderErr = "Please select one gender";
                               document.getElementById('genderErr').textContent = genderErr;
                           }
                       }else{
                           gameErr = "Please select atleast one game";
                           document.getElementById('gameErr').textContent = gameErr;
                       }
                   }else{
                       addressErr = "please filled the address details";
                       document.getElementById('addressErr').textContent = addressErr;
                   }
               }else{
                   passwordErr = "Password must be greater than 7 charaters";
                   document.getElementById('passwordErr').textContent = passwordErr;
               }
           }else{
               nameErr = "Name is required";
               document.getElementById('nameErr').textContent = nameErr;
           }
        

return flag;
    
}