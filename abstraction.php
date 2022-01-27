<?php
    abstract class car
    {
        public $name,$color;
        function __construct()
        {
            echo "Constructir will run first<br>";

        }
       abstract public function show($n,$c);
    }
    class volvo extends car
    {
        function show($n,$c){
            echo " car name is $n and car color is $c";
        
        }
    }
    class maruti extends volvo
    {
        function show($n,$c){
            echo "My car name is $n and car color is $c";
            echo"<br>";
        }
    }
    // $obj= new volvo();
    $obj= new maruti();
    $obj->show("MAruti","Red");
    $obj->show("BMW","pink");
    // $obj->show();


    
?>