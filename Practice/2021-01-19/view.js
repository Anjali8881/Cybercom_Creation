        var name = localStorage.getItem('username');
        var email = localStorage.getItem('useremail');
        var birthdate = localStorage.getItem('userdob');

    document.getElementById('vname').textContent = name;
    document.getElementById('vemail').textContent = email;
    document.getElementById('vdateofbirth').textContent = birthdate;