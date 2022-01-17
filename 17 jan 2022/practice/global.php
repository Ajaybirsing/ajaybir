<?php
    $x=4;
    $y=6;
    function demo()
    {  
        global $x,$y;
        $y=$x+$y;
        echo "<p> Addition of x and y is:- $y </p>";
    }
    demo();
    {
        echo "<p> value of x is :- $x </p>";
    }
?>