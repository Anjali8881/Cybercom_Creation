var array = localStorage.getItem('studentArr');
var stulist = JSON.parse(array);

array = stulist;

document.write('<table border="2px" id = "student_table">');
document.write('<tr>');
document.write('<th>Name</th> <th>Email</th> <th>Date Of Birth </th> </tr> <tr>');

if(array == null)
{
    alert("Records not found");
    document.getElementById("student_table").style.display = "none";
    //window.location.href  = "index.html";
}

else{
        for(var i=0;i<array.length;i++)
            {
                document.write('<td>'+array[i].name+'</td>');
                document.write('<td>'+array[i].email+'</td>');
                document.write('<td>'+array[i].DateOfBirth+'</td>');
                document.write('</tr>');
            }
    }
document.write('</table>');