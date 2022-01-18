<?php
    class Ajay
    {
        public $name,$age;
        function __construct($name1,$age1)
        {
            $this->name=$name1;
            $this->age=$age1;
        }
        function show()
        {
            echo"My name is " .$this->name. " and my age  is ".$this->age."<br>";
        }
    }
    $obj=new Ajay("Ajaybir",24);
    $obj->show();
    $obj2=new Ajay("sham",21);
    $obj2->show();
?>
