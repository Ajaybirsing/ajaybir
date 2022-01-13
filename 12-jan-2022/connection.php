<?php
$servername="localhost";
$username="root";
$password="";
$dbname="home"
$con=mysqli_connect($servername,$username,$password,$dbname);
if(!$con){
    die("connection failed".mysqli_connect_error());
}
    echo "connection successful";
mysqli_close($con);

?>