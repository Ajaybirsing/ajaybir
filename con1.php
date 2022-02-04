<?php
$servername="localhost";
$username="root";
$password="";
$dbname="ajay";
$con = mysqli_connect($servername,$username,$password,$dbname);
try{
if(!$con){
    die("connection failed".mysqli_connect_error());
}
    echo "connection successful";

}
catch(exception $n)
{
    echo $n->getline();
}


?>