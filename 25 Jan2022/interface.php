<?php
    interface ajay{
        function show($n,$m);
    }
    interface ajay1{
        function show1($a,$b);
    }

    class childclass implements ajay,ajay1{
        function show($n,$m){
            echo $n + $m;
            echo"<br>";
        }
        function show1($a,$b){
           echo $a - $b;
        }
        
    }
    $obj = new childclass();
    $obj->show(20,10);
    $obj->show1(20,10);
    // echo show();


    
?>