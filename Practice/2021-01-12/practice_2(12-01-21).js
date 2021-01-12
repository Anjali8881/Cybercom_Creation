var anjali = {
    firstname : 'Anjali',
    lastname : 'Sharma',
    birthyear : 1998,
    family : ['Anjali','Aditya','Rajni','Mukesh'],
    status : 'single',
    calage : function()
    {
        this.age =  2020 - this.birthyear;
    }
};
console.log(anjali.firstname);
anjali.calage();
console.log(anjali);