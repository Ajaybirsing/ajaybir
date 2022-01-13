

<?php
/*echo readfile("newvalid.php");*/
$my_file=fopen("newvalid.php","r") or die("unable to open");
echo fread($my_file,filesize("newvalid.php"));
fclose($my_file);



?>