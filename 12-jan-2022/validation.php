<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .error{color: #ff0000;}
    </style>
</head>
<body>
    <?php
    $nameerr=$emailerr=$gendererr=$comiterr=$websiteerr="";
    $name = $email = $website = $comit = $gender = "";
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        if(empty($_POST["name"])){
            echo"Please enter a valid name<br>";
        }
        else{
            $name=test_input($_POST["name"]);
            
        }
        if(empty($_POST["email"])){
            echo"Please enter a valid emailid<br>";
        }
        else
        {
            $email=test_input($_POST["email"]);
        }
        if(empty($_POST["gender"])){
            echo"Please select a gender <br>";
        }
        else
        {
            $gender=test_input($_POST["gender"]);
        }
        if(empty($_POST["comit"])){
            echo"Please enter a comment<br>";
        }
        else
        {
            $comit=test_input($_POST["comit"]);
        }
        if(empty($_POST["website"])){
            echo"Please enter a valid website<br>";
        }
        else
        {
            $website=test_input($_POST["website"]);
        }
        
    }
    function test_input($data){
        $data=trim($data);
        
        $data=stripslashes($data);
        $data=htmlspecialchars($data);
        return $data;
    }  
    ?>

<center>
    <div class="container">
    <h2>Student Registration form</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">Name:
    <input type="text" name="name" id="name" placeholder="Enter name"><br><br>Email:
    <input type="text" name="email" id="email" placeholder="Enter Email"><br><br>Website:
    <input type="text" name="website" id="website" placeholder="Enter website"><br><br>Comment:
    <textarea name="comit" id="comit" cols="30" rows="10"></textarea><br><br>
    Gender:
    <input type="radio" name="gender" value="male">Male
    <input type="radio" name="gender" value="female">Female
    <input type="radio" name="gender" value="other">other<br><br>
    <input type="submit"name="submit" value="submit" id="submit">




    </form>
    </center>
    <?php
    echo"<h2>Your Input is:</h2><br>";
    echo$name;
    echo"<br>";
    echo$email;
    echo"<br>";
    echo$website;
    echo"<br>";
    echo$comit;
    echo"<br>";
    echo$gender;
    echo"<br>";
    ?>  
</body>
</html>