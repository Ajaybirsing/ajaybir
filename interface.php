<?php
    interface Ab{
        function show($n);
        function __construct($n);
            // echo"Kawal";
    // }
        
    }
    interface Abc{
        function show1($b);
        function show2($c);
    }
    class xyz implements Ab,Abc{   
        function __construct($n){
            echo"Kawal".$n;
        } 
        public function show($n){

            echo"heloo2<br>";
            echo $n;
        }
        public function show1($a){
            echo"heloo2<br>";
            echo $a;
        }
        public function show2($c){
            echo"heloo3<br>";
            // $c=$n+$b;
            echo $c;
        }

    }
    $obj = new xyz("Happy birthday");
    $obj->show(5);
    $obj->show1(11);
    $obj->show2(8);

?>