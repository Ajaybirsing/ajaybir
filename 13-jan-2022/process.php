<?php 

$servername="localhost";
$username="root";
$password="";
$dbname="login";
$con=mysqli_connect($servername,$username,$password,$dbname);
if(!$con){
    die("connection failed".mysqli_connect_error());
}

if(isset($_POST['submit']))
{
    $name=$_POST["name"];
    $email=$_POST["email"];
    $gender=$_POST["gender"];
    $education=$_POST["education"];
    $chk="";
    foreach($education as $chk1)
    {
        $chk.=$chk1 .",";

    }
    $sql = "INSERT INTO login1 ( `name`, `email`, `gender`, `education`) VALUES ('$name', '$email', '$gender', '$chk');";
    
    echo $sql;
    if($con->query($sql) == true)
    {
        echo "successfuly inserted";
    }
    else{
        echo "Error: $sql <br> $con->error";
    }
    $con->close();

}

?>
