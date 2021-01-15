//number 1
var num1=0;

//number 2
var num2 = 1;

//variable which store the sum of two numbers
var sum;

//prompt will take the user input 
var num = prompt("Enter the limit to generate fibonnacci series",0);

//display first number
document.write(num1+"<br>");

//display second number
document.write(num2+"<br>");

//swapping and print the fibonnacci series
for(var i=0;i<=num;i++)
{
    sum = num1+num2;
    num1=num2;
    num2=sum;

    document.write(sum+"<br>");
    
}