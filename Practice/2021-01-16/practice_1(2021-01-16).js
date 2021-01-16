//Functions returning function

function dishes(type)
{
    if(type === 'chinese')
    {
        return function(name)
        {
            console.log('Did you like chinese dishes '+name+' ?');
        }
    }

    else if(type === 'sweet')
    {
        return function(name)
        {
            console.log('Did you like sweet dishes '+name+' ?');
        }
    }
    else{
        return function(name)
        {
            console.log('Which type of food you like '+name+' ?');
        }
    }
}

dishes('sweet')('anjali');
dishes('chinese')('anjali');
dishes('punjabi')('anjali');
var chinesedish = dishes('chinese');
chinesedish('anjali');

//----------------------------------------------------------------------------------

//Immediately Invoked Function Expression

(function () {
    var score = Math.random() * 10;
    console.log(score >= 5);
})();

(function (goodluck) {
    var score = Math.random() * 10;
    console.log(score >=5 - goodluck);
})(5);


//----------------------------------------------------------------------------------------

//Closures

function retirement(retirementage)
{
    var text = ' years left until retirement.';
    return function (yearOfBirth)
    {
        var age = 2020 - yearOfBirth;
        console.log((retirementage-age)+ text);
    }
}

var retirementUS  = retirement(66);
retirementUS(1998);

var retiremntIndia = retirement(55);
retiremntIndia(1940);

function interviewQustion(job)
{
    return function(name){
        if( job === 'designer')
        {
            console.log(name+' , can you please explain what UX design is ?');
        }
        else if( job === 'teacher')
        {
            console.log('What subject do you teach, '+name+' ?');
        }
        else{
            console.log('Hello '+name+' , What do you do ?');
        }
    }
}

interviewQustion('teacher')('anjali');
interviewQustion('designer')('anjali');
interviewQustion('developer')('anjali');

//-------------------------------------------------------------------------------------------------------

//Bind , Call and Apply

var anjali = {
    name: 'Anjali Sharma',
    age: 23,
    job: 'developer',
    presentation: function(style,timeOfDay)
    {
        if (style === 'formal')
        {
            console.log('Good '+timeOfDay +' Ladies and gentlemen! I\'m '+this.name+' I\'m a '+this.job+' and I\'m '+this.age+' year old.');
        }
        else if(style === 'freindly'){
            console.log('Hey! what\'s up? I\'m '+this.name+' I\'m a '+this.job+' and I\'m '+this.age+' year old. Have a nice '+timeOfDay+'.');
        }
    }
};

var vanshika = 
{
    name: 'Vanshika Agarwal',
    age: 22,
    job: 'designer'
};

anjali.presentation('formal','morning');

//call method
anjali.presentation.call(vanshika,'freindly','afternoon');

//apply method
//anjali.presentation.apply(vanshika,['freindly','afternoon']);

//Bind method

var anjalifreindly = anjali.presentation.bind(anjali,'freindly');
var anjaliformal = anjali.presentation.bind(anjali,'formal');

anjalifreindly('morning');
anjaliformal('afternoon');

var vanshikafreindly = anjali.presentation.bind(vanshika,'freindly');
var vanshikaformal = anjali.presentation.bind(vanshika,'formal');

vanshikafreindly('afternoon');
vanshikaformal('morning');


var years = [1990,1965,1937, 2005, 1998];

function arrayCalc(arr,fn)
{
    var arrRes = [];
    for(var i = 0; i< arr.length; i++)
    {
        arrRes.push(fn(arr[i]));
    }
    return arrRes;
}

function calculateAge(arrg)
{
    return 2020-arrg;
}

function isFullAge(limit,arrg)
{
    return arrg >= limit;
}

var ages = arrayCalc(years,calculateAge);
var fullJapan = arrayCalc(ages,isFullAge.bind(this,20));
console.log(ages);
console.log(fullJapan);

//--------------------------------------------------------------------------------------------

//Strings

let firstName = 'Anjali';
let lastName = 'Sharma';
const yearOfBirth = 1998;;

function calcAge(year)
{
    return 2020 - year;
}

console.log(`My name is ${firstName} ${lastName} and age is ${calcAge(yearOfBirth)}`);

const name = `${firstName} ${lastName}`;
console.log(name);
console.log(name.startsWith('A'));
console.log(name.endsWith('me'));
console.log(name.includes(' '));
console.log(`${firstName} `.repeat(5));

