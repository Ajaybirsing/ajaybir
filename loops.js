function myshow()
{
    document.getElementById("demo1").innerHTML="Hello Ajay";
}
i=0;
while(i<5){
    document.write("<strong>Outer Loop "+i+"</strong>");
    // document.write(i);
    i++;
    document.write("<br>");
    var j=1.;
    while(j<4)
    {
        document.write("inner Loop");
        document.write(j);
        j++;
        document.write("<br>");
    }
}

for(i=0;i<=4;i++)
{
    document.write("");
    document.write("<br>");
    var j=1.;
    for(j=i;j<=4;j++)
    {
    document.write("*");
    // document.write("<br>");
    }
}
for(i=5;i>=1;i--)
{
    document.write("");
    document.write("<br>");
    var j=1.;
    for(j=i;j<=5;j++)
    {
    document.write("*");
    // document.write("<br>");
    }
}