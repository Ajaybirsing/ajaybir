<?php
    $arr1=array(array(1,1,1),array(1,1,1),array(1,1,1));
    $arr2=array(array(2,2,2),
                array(2,2,2),
                array(2,2,2));
    $arr3=array(array(0,0,0),
    array(0,0,0),
    array(0,0,0));
    
    echo "<br> ---------first matrix----------<br>";
    for($row=0;$row<3;$row++){
        for($col=0;$col<3;$col++){
            echo $arr1[$row][$col]. "  ";
        }
        echo"<br>";
    }
   echo "<br> -------Second matrix ---------<br>";

    for($row=0;$row<3;$row++){
        for($col=0;$col<3;$col++){
            echo $arr2[$row][$col]. "  ";
        }
        echo"<br>";
    }
    
    echo "<br>-------Multiplication matrix-------------<br>";

    for($row=0;$row<3;$row++){
        for($col=0;$col<3;$col++){
            for($col1=0;$col1<3;$col1++)
            {
                $arr3[$row][$col] = $arr3[$row][$col] + $arr1[$row][$col1]*$arr2[$col1][$col];
            }
        }
    }
    for($row=0;$row<3;$row++){
        for($col=0;$col<3;$col++){
            echo $arr3[$row][$col]. "  ";
        }
        echo"<br>";
    }


?>