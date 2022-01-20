<?php
    class Base
    {
        public $name, $color;
        public function __construct($n,$c)
        {
            $this->name=$n;
            $this->color=$c;
        }
        public function dis()
        {
            echo " The fruit name is ".$this->name." and color is ". $this->color."<br>";
        }
    }
    class Derived extends Base
    {
        public function display()
        {
            echo "Am i a fruit";
        
        }
    }
    $obj= new Derived("Apple","Red");
    $obj->dis();  
    $obj->display();
   
?>