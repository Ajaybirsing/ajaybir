<?php
$server="localhost";
$username="root";
$password="";
$dbname= "home";
$con=mysqli_connect($server,$username,$password,$dbname);
if(!$con){
    die("connection failed".mysqli_connect_error());
}
//echo"successfully connection <br>";
/*$sql1="CREATE TABLE home2(id int AUTO_INCREMENT PRIMARY KEY,sname VARCHAR(30) NOT NULL,email VARCHAR (20) NOT NULL,phoneno int (12) not null,gender VARCHAR(30) NOT NULL,education VARCHAR (30) NOT NULL)";
if(mysqli_query($con,$sql1)){
    echo "table created successfully";
}
else{
    echo "connection failed to create database".mysqli_error($con);
}*/
if(isset($_POST['submit']))
{
    $sname=$_POST["sname"];
    $email=$_POST["email"];
    $phoneno=$_POST["phoneno"];
    $gender=$_POST["gender"];
    // $education=$_POST["education"];
    // echo $education; die;
    $education ="";
    foreach($_POST["education"] as $value){
        $education.=$value.",";
    }

    $education=substr($education,0,strlen($education)-1);
    
    
$sql1= "INSERT INTO `home2` (`sname`, `email`, `phoneno`,`gender`,`education`) VALUES ( '$sname', '$email', '$phoneno','$gender','$education')";

if(mysqli_query($con,$sql1)){
   // echo "insert data successfully";//
}
else{
    echo "connection failed to create database".$sql. "<br>" .mysqli_error($con);
}
mysqli_close($con);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body><center>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<h2>Weclome to Chandigarh uviversity please fill all column</h2><br>Name:
<input type="text" name="sname" id="sname" placeholder="Enter Name please"><br><br>
Email:<input type="text" name="email" id="email" placeholder="Enter Email"><br><br>
Phoneno:<input type="number" name="phoneno" id="phoneno" placeholder="Please enter phoneno."><br><br>
Gender: Male<input type="radio" name="gender" value="male">
<input type="radio" name="gender" value="female">Female<br><br>
Education:
10th<input type="checkbox" name="education[]" value="10TH">
Diploma<input type="checkbox" name="education[]" value="dip">
B.tec<input type="checkbox" name="education[]" value="b.tec"><br><br>
<input type="submit" name="submit"value="submit">



</form>
</center>
</body>
</html>


