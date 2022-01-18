<?php
    class Demo
    {
        public $name,$age;
        public function show()
        {
            echo "My name is ". $this->name . " and my age is ".$this->age;
        }
    }
    $p1=new Demo();
    $p1->name = "Ajaybir";
    $p1->age = 23;

    $p1->show();

?>