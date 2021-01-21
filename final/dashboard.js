//var to store admin details
var registeredadmin = JSON.parse(sessionStorage.getItem('AdminRegistrationDetails'));

//write the admin name on the navigation bar
document.getElementById("adminName").innerHTML = "Hello " + registeredadmin.name;
 