//Arrow function

const year = [1998,2003,1995,1997];

let ages = year.map(el => 2016-el);
console.log(ages);

ages = year.map((el,index) => `Age element is ${index + 1} : ${2016-el} .`);
console.log(ages);

ages = year.map((el,index) => {
    const now = new Date().getFullYear;
    const age  = now - el;
    return `Age element is ${index + 1} : ${age} .`;
});
console.log(ages);

//--------------------------------------------------------------------------------

//Destructuring

const [name,age] = ['anjali','23'];
console.log(name);
console.log(age);

const anjali = {
    firstName : 'Anjali',
    lastName : 'Sharma'
};

const {firstName, lastName} = anjali;
console.log(firstName);
console.log(lastName);

const {firstName: a,lastName : b}= anjali;
console.log(a);
console.log(b);


function calageRetirement(year)
{
    const age = 2021 - year;
    return [age,65 - age];
}

const [age,retirement] = calageRetirement(1998);
console.log(age);
console.log(retirement);



//Challange

var A = {x:'abcd'};
for(x in A){
	console.log(A.x); //returns the value of x
	console.log(x); //returns key
}
console.log(A); // returns object

var obj = {
 getData : 'My data', 
 func: function(){ 
 	var myfunc = function()
 	{ 
 		return this.getData;
 	}  
 	console.log(myfunc());
 }};

obj.func(); // return undefined

var obj2 = {
    getData2 : 'My data', 
    func2: function(){ 
        self=this;
        var myfunc2 = function()
        { 
            return self.getData2;
        }  
        console.log(myfunc2());
    }};
   
obj2.func2(); //return My data value

var year = [1998,1995,1997];
for(var x in year) //gives access to index
{
	console.log(year[x]); 
}