if (typeof(Storage) !== "undefined") {

    // to store value
   try{
    sessionStorage.setItem("firstname", "Anjali");

    // to get value
    document.getElementById("name").innerHTML = sessionStorage.getItem("firstname");
  }
  catch(e){
    alert("Access Denied");
  }
} 
  else {
    document.getElementById("name").innerHTML = "Check the setting of browser storage";
  }
  