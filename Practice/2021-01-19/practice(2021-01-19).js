//Classes

//ES5

var Person5 = function(name,yearOfBirth,job){
    this.name = name;
    this.yearOfBirth = yearOfBirth;
    this.job = job;
}

Person5.prototype.calage = function() {
    var age = 2021-this.yearOfBirth;
    console.log(age)
}

var anjali = new Person5('Anjali',198,'developer');

//ES6

class Person6 {
    constructor(name,yearOfBirth,job)
    {
        this.name=name;
        this.yearOfBirth=yearOfBirth;
        this.job=job;
    }

    calage()
    {
        var age = 2021 - this.yearOfBirth;
        console.log(age);
    }

    static greetings()
    {
        console.log("Hey how are you!");
    }
}

const anjali6 = new Person6('anjali',1998,'developer');

Person6.greetings();

//Classes and subclasses

//ES5

var Person5 = function(name,yearOfBirth,job)
{
    this.name = name;
    this.yearOfBirth = yearOfBirth;
    this.job = job;
}

Person5.prototype.calage = function()
{
    var age = new Date().getFullYear() - this.yearOfBirth;
    console.log(age);
}

var Athelete5 = function(name,yearOfBirth,job,olympic,medal)
{
    Person5.call(this,name,yearOfBirth,job);
    this.olympic = olympic;
    this.medal = medal;
}

Athelete5.prototype = Object.create(Person5.prototype);

Athelete5.prototype.wonmedal = function()
{
    this.medal++;
    console.log(this.medal);
}

var anjaliathelete5 = new Athelete5('anjali',1998,'swimmer',3,10);
for(var x in anjaliathelete5)
{
    console.log(anjaliathelete5[x]);
}

anjaliathelete5.calage();
anjaliathelete5.wonmedal();

//ES6

class Person6{
    constructor(name,yearOfBirth,job)
    {
        this.name = name;
        this.yearOfBirth = yearOfBirth;
        this.job= job;
    }

    calage()
    {
        var age = new Date().getFullYear() - this.yearOfBirth;
        console.log(age);
    }
}

class Athelete6 extends Person6
{
    constructor(name,yearOfBirth,job,olympicGames,medals) {
        super(name,yearOfBirth,job);
        this.olympicGames = olympicGames;
        this.medals = medals;
    }

    wonmedals()
    {
        this.medals++;
        console.log(this.medals);
    }
}

const anjaliathelete6 = new Athelete6('anjali',1998,'swimmer',3,10);
anjaliathelete6.calage();
anjaliathelete6.wonmedals();
