<?php 
include "newvalid.php";
$sql="INSERT INTO `home3` (`name`, `email`, `message`) VALUES ( '$name', '$email', '$message');";
if(sqli_connect_query($con,$sql))
{
    //
}
else
{
    echo "not inserted the data into table ".$sql ."<br>". sqli_connect_error($con);
}
mysqli_close($con);
?>