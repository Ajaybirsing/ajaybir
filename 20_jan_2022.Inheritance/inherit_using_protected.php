<?php
    class Base
    {
        public $name, $color;
        public function __construct($n,$c)
        {
            $this->name=$n;
            $this->color=$c;
        }
        protected function dis()
        {
            echo " The fruit name is ".$this->name." and color is ". $this->color."<br>";
        }
    }
    class Derived extends Base
    {
        public function display()
        {
            echo "Am i a fruit";
        // Call protected function from within derived class - OK 
        $this -> dis();
        }
    }
    $obj= new Derived("Apple","Red");
    $obj->display();
    //$obj->dis();  Error
   
?>