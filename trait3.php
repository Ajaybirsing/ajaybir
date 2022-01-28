<?php
    trait abc1{
        function show($a,$b){
            $c = $a + $b;
            echo " first no. is $a <br> Second no. is $b<br> Addition of both no. is $c<br>";

        }
    }
    trait abc2{
        function show($a,$b){
            $c = $a - $b;
            echo " first no. is $a <br> Second no. is $b<br> Subtraction of both no. $c is ";

        }
    }
    class base{
        use abc1 , abc2
        {
            abc1::show insteadOf abc2;
        
        }
    }
    $obj= new base();
    $obj->show(4,2);

?>