<?php
    $x=array(
        array(10,12,5),
        array(2,1,3),
        array(7,5,8));
   for($row=0; $row<3; $row++){
       for($col=0; $col<3; $col++){
           echo $x[$row] [$col]. "  ";
       }
       echo "<br>";

   }
   echo"<br><br>";

   $y=array(
    array(2,5,7),
    array(1,6,5),
    array(2,3,2));
for($row=0; $row<3; $row++){
   for($col=0; $col<3; $col++){
       echo $y[$row][$col]. "  ";
   }
   echo "<br>";

}
echo"<br><br>";

$z = array(
    array(0,0,0),
    array(0,0,0),
    array(0,0,0));

for($row=0; $row<3; $row++){
    for($col=0; $col<3; $col++){
        $z[$row][$col] = $x[$row][$col] + $y[$row][$col];
        echo $z[$row][$col]. "  ";
    }
    echo "<br>";
 
 }   
?>