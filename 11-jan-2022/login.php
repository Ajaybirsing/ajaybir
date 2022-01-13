<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    

    <style type="text/css">
    
   .container{
      background: #f7f7f7;
      padding: 20px;
      border: 1px solid orange;
      margin: 50px 0px;
    }
    .err-msg{
      color:red;
    }
    .container{
      border: 1px solid #e8e8e8;
      padding: 10px;
      background: #f3f3f3;
    }
    </style>
</head>
<body>
    
    <?php
    $name = $email = $website = $comit = $gender = "";
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $name=test_input($_POST["name"]);
        $email=test_input($_POST["email"]);
        $website=test_input($_POST["website"]);
        
        $gender=test_input($_POST["gender"]);
        $comit=test_input($_POST["comit"]);

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