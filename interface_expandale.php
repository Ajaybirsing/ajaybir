<?php
    interface car{
        function show1($n,$a);      
    }
    interface b extends car{
        function show($n,$a);
        // echo "HI ajay<br> ";
    }
    class c implements car,b{
        function show($n,$a)
        {
          
            echo "My name is $n and my age is $a <br>";
        }
        function show1($n,$a)
        {
          
            echo "My name is $n and my age is $a <br>";
        }
    }
    $obj = new c();
    $obj->show("Ajay","56");
    $obj->show1("Ajaybir","36");
?>