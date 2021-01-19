//1. A program to list the properties of an object.


const anjali = 
{
    firstName : 'Anjali',
    lastName : 'Sharma',
    yearofBirth : 1998
};

for(let x in anjali)
{
    console.log(anjali[x]);
}

//A program to sort an array of objects.

const people = [
    {
        name : 'Anjali',
        age : 23,
        email : 'anjalisharma.glsica16@gmail.com',
        telephone : 9558899037
    },

    {
        name : 'Vanshika',
        age : 24,
        email : 'vanshika@gmail.com',
        telephone : 9812310967
    },

    {
        name : 'Aaakash',
        age : 26,
        email : 'aakash@gmail.com',
        telephone : 9121234098
    },

    {
        name : 'Mustafa',
        age : 25,
        email : 'mustafa@gmail.com',
        telephone : 9812091765
    },


];

people.sort((a, b) => b.age - a.age);

people.forEach(x => {
    console.log(`${x.name} ${x.age} ${x.email} ${x.telephone}` );
});

/*2. Add multiple objects in array and store it in local storage.

o Object contains the below properties,

o Name, Age, Email, Telephone Number.

o Display the multiple objects in table structure.*/

const people = [
    {
        name : 'Anjali',
        age : 23,
        email : 'anjalisharma.glsica16@gmail.com',
        telephone : 9558899037
    },

    {
        name : 'Vanshika',
        age : 24,
        email : 'vanshika@gmail.com',
        telephone : 9812310967
    },

    {
        name : 'Aaakash',
        age : 26,
        email : 'aakash@gmail.com',
        telephone : 9121234098
    },

    {
        name : 'Mustafa',
        age : 25,
        email : 'mustafa@gmail.com',
        telephone : 9812091765
    },


];

localStorage.setItem("people",JSON.stringify(people));
console.table(people);

var html = "<table border='2px'>";
for (let i = 0; i < people.length; i++) {
    html+="<tr>";
    html+="<td>"+people[i].name+"</td>";
    html+="<td>"+people[i].age+"</td>";
    html+="<td>"+people[i].email+"</td>";
    html+="<td>"+people[i].telephone+"</td>";
    
    html+="</tr>";

}
html+="</table>";
document.getElementById("box").innerHTML = html;

