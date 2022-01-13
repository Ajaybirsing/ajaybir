<?php
include "connection.php";
$nameerror=$emailerror="";
$name=$email=$message="";
if(isset($_POST['submit']))
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(empty($_POST["name"])){
        $nameerror="please Enter Your Name";
    }
    else{
        $name=test_input($_POST["name"]);
        if(!preg_match("/^([a-zA-Z' ]+)$/",$name)){
            $nameerror="only use Alphabet characters";
            $name="";
        }
    
    }
    if(empty($_POST["email"])){
        $emailerror="Please enter Email";
    }
    else{
        $email=test_input($_POST["email"]);
        if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            $emailerror="email ends with @gmail.com";
            $email = "";
        }
    }
        $message=test_input($_POST["message"]);
    if($name == "" || $email == "" || $message == ""){
        $name=$email=$message="";
    }
}
function test_input($data){
    $data=trim($data);
    $data=htmlspecialchars($data);
    $data=stripslashes($data);
    return $data;
    include "ap.php";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>validation</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <style type="text/css">

        .bcolor{color: #ff0000;}
         .container{
             background: #f7f7f7;
             padding: 20px;
             border: 1px solid orange;
             margin: 50px 0px; 
            }
    }
    .container{
      border: 1px solid #e8e8e8;
      padding: 10px;
      background: #f3f3f3;
    }


    </style>
    
</head>
<body><center>
    <h2>Welcome to ShineDezine Company</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

    Name:<input type="text" name="name" id="name" ><br><spam class="bcolor">*<?php echo $nameerror;?></spam><br><br>

    Email:<input type="email" name="email" id="email"><br><spam class="bcolor">*<?php echo $emailerror;?></spam><br><br>
    Message:<textarea name="message" id="message" cols="24" rows="4"></textarea><br><br>

    <input type="submit"name="submit" value="submit" id="submit">
</form>
</center>
<?php

echo $name;
echo"<br>";
echo $email;
echo"<br>";
echo $message;
echo"<br>";




?>
</body>
</html>