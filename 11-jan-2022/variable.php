<?php
$a="Ajaybir";
echo $a;
$var1=12234;
$var2=12234;
$var3=$var1+$var2;
print("<br>$var1 +$var2 is =$var3");
echo"<pre>";
print_r($_POST);
echo"<pre>";
print_r($_GET);
if(true){
    print("condition is true");

}
else{
    print("condition is false");
}
$ab=null;
echo $ab;
$name="name";
$literally="My $name is not print<br> ";
echo $literally;
echo "<br>";
$name='ajay';
$literally='My $name is print';
echo $literally;

$he = "Sohang";
$friend = "Sprash";

$talking = "$he, \"said: My Core is Better Then you.\"
            $friend, \" Not Agreed with. \"$he";

echo("\n");
echo("\n".$talking);


?>