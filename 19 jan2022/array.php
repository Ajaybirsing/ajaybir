<?php
    $arr=[1,3,2,12,44,55,66];
    usort($arr, function($x,$y)
    {
        return $x<$y;
    });
    foreach($arr as $x)
    {
        echo $x ."<br>";
    }
?>