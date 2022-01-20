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
            echo " The fruit name is ".$this->name." and color is ". $this->color."<br> --------After overriding--------<br>";
        }
    }
    class Derived extends Base
    {
        public $name,$color,$weight;
        public function __construct($n,$c,$w)
        {
            $this->name=$n;
            $this->color=$c;
            $this->weight=$w;
            
        }
        public function fruit()
        {
            echo " The fruit name is ".$this->name." and color is ". $this->color." and weight is " .$this->weight."<br>";
        }
    }
    $obj= new Derived("Apple","Red",40);
    $obj->dis();  
    $obj->fruit();
    
?>