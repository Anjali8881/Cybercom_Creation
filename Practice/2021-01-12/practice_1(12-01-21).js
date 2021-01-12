//for loop

for(var i=0;i<=10;i++)
{
    console.log(i);
}

//for loop for printing array values
var john = ['John',1990,'Good','designer'];

for(var j=0;j< john.length;j++)
{
    console.log(john[j])
}

//break and continue

for(var j=0;j< john.length;j++)
{
    if(typeof john[j] !== 'string') continue;
    console.log(john[j])
}

for(var j=0;j< john.length;j++)
{
    if(typeof john[j] !== 'string') break;
    console.log(john[j])
}