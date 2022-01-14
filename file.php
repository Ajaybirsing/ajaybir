<?php
$file_temp;

if(isset($_FILES['image']))
{
    
    $file_name = $_FILES['image']['name'];
    $file_full_path = $_FILES['image']['full_path'];
    $file_type = $_FILES['image']['type'];
    $file_tmp_name1 = $_FILES['image']['tmp_name'];
    $file_size = $_FILES['image']['size'];
   	//set allowed types as array
	$allowed = array('jpg', 'png', 'jpeg','gif');
 
		//get uploaded file extension
	$file = $_FILES['image']['name'];
	$ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
 
		//check if extension is allowed
    if(in_array($ext, $allowed)){
			//action if type is allowed
		// $_SESSION['success'] = 'File type allowed';
        echo "file allowed";
	}
		else{
			//action if type is not allowed
			echo'File type not allowed';
		}
    move_uploaded_file($file_tmp_name1,"ajay/".$file_name);
    




}



?>


<!DOCTYPE html>
<html lang="en">
<body>
    <form action="" method="post" enctype="multipart/form-data">
       
        <input type="file" name="image" id="image">
        <input type="submit" value="submit">




    </form>
</body>
</html>