/*4. Create one html form that contain the below fields,

o Name, Email, Date of birth.

o On click of submit button, Store the data as object in one single array. (array will be same for all records)

o Display the data in one table format another page that is, view.html*/

function add()
{
    var submit = document.getElementById('submit');
	if(submit){
	var usrname = document.getElementById('name').value;
	var email = document.getElementById('email').value;
	var dateOfBirth = document.getElementById('dob').value;
		
	var person = {
			name : usrname,
			emailId : email,
			dob : dateOfBirth
		};
            document.getElementById('input_form').textContent = person.name;
            document.getElementById('input_form').textContent = person.emailId;
            document.getElementById('input_form').textContent = person.dob;
		console.log(person);
	}
}