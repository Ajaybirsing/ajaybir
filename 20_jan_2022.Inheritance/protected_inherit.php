<?php
    class Abc
    {
        public  $name,$model;
        public function __construct($n,$m)
        {
            $this->name = $n;
            $this->model = $m;
           
        }
        public function dis()
        {
            echo " MY car name is a ". $this->name. " and model is ".$this->model ."<br>";
        }
    }
    class ajay extends Abc
    {
        public function display()
        {
            echo " Hi ajaybir ";
            $this->dis();
        }
    }
    
    $obj = new ajay("BMW", "2011");
    $obj->display();
    
   
?>