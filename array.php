<?php
    $a= array("Red","Yellow","Green","Blue");
    foreach($a as $values)
    {
        echo "array is:- $values <br>";
    }
?>
<?php
    $a1= array("Red"=>"Apple","Yellow"=>"Mango","Green"=>"Grapes","Blue"=>"Bringle");
    foreach($a1 as $key=> $values)
    {
        echo "array key is:- $key . and values is $values <br>";
    }
?>
<?php
    $b = array(array(1,2,3,4), array(4,5,6,2), array(7,8,9,1));
    for($row=0; $row < 3; $row++){
        for($col = 0; $col < 4; $col++){
            echo $b[$row][$col]. "  ";
        }
        echo "<br>";
    }
    echo "<br>";
    foreach($b as $v1){
       
        foreach($v1 as $v2){
            echo $v2 . "  ";
        }
        echo"<br>";
    }
    echo $b[1][2];//output is 6
?>