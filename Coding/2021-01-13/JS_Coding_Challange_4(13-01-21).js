//John's details object in which there is deaails of john's full name height and weight and the function which calculate John's BMI
var johndetails = {
    full_name : 'John Smith',
    mass : 58,
    height : 4.5,
    johnBMI : function()
    {
        this.johnBMIvalue = this.mass/(this.height*this.height);
        return this.johnBMIvalue;
    }
};

//Mark's details object in which there is deaails of mark's full name height and weight and the function which calculate mark's BMI
var markdetails = {
    full_name : 'Mark Smith',
    mass : 84,
    height : 5.2,
    markBMI : function()
    {
        this.markBMIvalue = this.mass/(this.height*this.height);
        return this.markBMIvalue;
    }
};

//john's function of BMI calculation called
johndetails.johnBMI();

//mark's function of BMI calculation called
markdetails.markBMI();

//print John's BMI value on colnsole
console.log(johndetails.johnBMIvalue);

//print Mark's BMI value on colnsole
console.log(markdetails.markBMIvalue);

//conditions to check whose BMI's is equal or its equal or not
if(johndetails.johnBMIvalue > markdetails.markBMIvalue)
{
    console.log(johndetails.full_name+'\'s'+' BMI is '+johndetails.johnBMIvalue+' and it is greater than Mark\'s BMI');
}

else if(johndetails.johnBMIvalue == markdetails.markBMIvalue)
{
    console.log(johndetails.full_name+'\'s'+' BMI and '+markdetails.full_name+'\'s'+' BMI is equal ');
}
else{
    console.log(markdetails.full_name+'\'s'+' BMI is '+markdetails.markBMIvalue+' and it is greater than John\'s BMI');
}