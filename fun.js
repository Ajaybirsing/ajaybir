console.log(4+6);
a=prompt("Enter Password");
if(a=="Ajay")
{
    document.write("Welcome to chandigarh University <br>",a );
}
else{
    document.write("Connection Failed Your Password is wrong");
}
var day =1;
switch(day)
{
    case 1:
        document.write("<br>Monday");
        break;
    case 2:
        document.write("Tuesday");
        break;
    case 3:
        document.write("Wednesday");
        break;
    case 4:
        document.write("Thursday");
        break;
    default:
        document.write("Please Write a Number 1 to 7");
        break;

}
var i=0;
for(;;i++)
{
    if(i==3)
    {
        document.write("Loop Break")
        break;
    }
    document.write(i + "<br>");
}
document.write(i,"Loop end");