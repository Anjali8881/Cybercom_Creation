//array of John's bill
var bill = [124,48,268];

//function for tip calculation
function calbill(bill)
{
    if(bill < 50)
    {
        return bill*0.2;
    }
    else if(bill > 50 && bill < 200)
    {
        return bill*0.15;
    }
    else
    {
        return bill*0.10;
    }
}

//array of tip
var tip = [calbill(bill[0]),calbill(bill[1]),calbill(bill[2])];
for(var i=0;i<bill.length;i++)
{
    console.log(bill[i]);
}

for(var i=0;i<tip.length;i++)
{
    console.log(tip[i]);
}

//total bill calculation and array of total bill
var totalbill = [bill[0]+tip[0],bill[1]+tip[1],bill[2]+tip[2]];
for(var i=0; i < totalbill.length; i++)
{
    console.log([totalbill[i]]);
}