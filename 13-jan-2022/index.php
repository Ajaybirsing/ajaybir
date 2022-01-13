

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>database connection</title>
</head>
<body>
    <div>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <h2>Weclome to Chandigarh uviversity</h2>
            <input type="text" name="name" id="name" placeholder="Enter Name please"><br><br>
            <input type="text" name="email" id="email" placeholder="Enter Email"><br>Gender: Male
            <input type="radio" name="gender" id="male">Female
            <input type="radio" name="gender" id="female"><br><br>Education<br><br>10th
            <input type="checkbox" name="education" id="10th">diploma
            <input type="checkbox" name="education" id="diploma">B.tec
            <input type="checkbox" name="education" id="b.tec">Other
            <input type="checkbox" name="education" id="other"><br><br>
            <input type="submit" value="submit" id="submit">
        </form>
    </div> 
    
</body>
<?php
include 'process.php';
?>
</html>
