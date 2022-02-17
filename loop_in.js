var obj = {"Ajay": 1,"Ram" : 2,"Aman":34,"Sham":6,"Ramlal":66};
for( var key in obj)
{
    document.write(obj[key]+"<br>");
}   

// for in loop 
document.write("******************For in loop****************************<br>")
var obj1 =[1,2,3,4,52,22,52,63,36,136,511,244,42,22,2];
document.write("Array Length is:- "+obj1.length+ " <br>");
for(key in obj1)
{
    document.write(key+ " :"+obj1[key]+" <br>");
} 
document.write("******************For of loop****************************<br>")
var obj2 =[52,63,36,136,511,244,42,22,2];
document.write("Array Length is:- "+obj2.length+ " <br>");
for(key of obj2)
{
    // document.write(key+ " <br>");
    document.write(key+ " <br>");
    
} 

document.write("******************Foreach of loop****************************<br>")
obj2.forEach(function (index ,value, array)
{
    document.write("Array Index value is:- "+index+" and Array value is:- "+value+" <br>");
});