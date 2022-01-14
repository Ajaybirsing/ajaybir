<?php
require "connection.php";
$file_temp = "";
$nameerror=$emailerror="";
$name=$email=$message="";
$default = 1; 
if(isset($_POST['submit']))
{
    if(isset($_FILES['image']))
    {

       $file_name = $_FILES['image']['name'];
       // $file_full_path = $_FILES['image']['full_path'];
       // $file_type = $_FILES['image']['type'];
       $file_tmp_name1 = $_FILES['image']['tmp_name'];
       $file_size = $_FILES['image']['size'];
  //set allowed types as array
  $allowed = array('jpg', 'png', 'jpeg','gif');

   //get uploaded file extension
   $ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

   //check if extension is allowed
if(in_array($ext, $allowed)){
       //action if type is allowed
   // $_SESSION['success'] = 'File type allowed';
   echo "file allowed";
   $default =1; 
   
}
else {
    //action if type is not allowed
    echo 'File type not allowed';
    $default=0;

}

if(empty($_POST["name"])){
    $nameerror="please Enter Your Name";
    $default = 0;
} else {
    $name= trim($_POST["name"]);
    if(!preg_match("/^([a-zA-Z' ]+)$/",$name)){
        $nameerror="only use Alphabet characters";
        $name="";
    }
    
}
if(empty($_POST["email"])){
    $default = 0;
    $emailerror="Please enter Email";
}
else{
    $email=$_POST["email"];
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $emailerror="email ends with @gmail.com";
        $email = "";
    }
}
$message= $_POST["message"]; 
  if($default == 1) {
 if(move_uploaded_file($file_tmp_name1,"ajay12/". $file_name))  {
    $sql1 = "INSERT INTO `home4` (`name`, `email`, `message`) VALUES ( '$name', '$email', '$message')";
    if(mysqli_query($con,$sql1)) {
      echo "insert data successfully";
     } else {
         echo "connection failed to create database". $sql1 . "<br>" .mysqli_error($con);
      }
    }
} 
}}
?>