var person = function(name,yearOfBirth,job)
{
    this.name = name;
    this.yearOfBirth = yearOfBirth;
    this.job = job;
    this.calculateAge = function()
    {
        console.log(2021 - this.yearOfBirth);
    }
}

var anjali = new person('Anjali',1998,'developer');
var aditya = new person('Aditya',2003,'student');
//anjali.name;
//anjali.yearOfBirth;
//anjali.job;
console.log(anjali.name);
console.log(anjali.yearOfBirth);
console.log(anjali.job);
anjali.calculateAge();
aditya.calculateAge();