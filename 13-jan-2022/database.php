<?php 


$con=mysqli_connect(localhost,root,"",login);
if(!$con){
    die("connection failed".mysqli_connect_error());
}
mysqli_close($con);


?>
