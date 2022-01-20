<?php
    class Abc
    {
        public  $name,$model;
        public function __construct($n,$m)
        {
            $this->name = $n;
            $this->model = $m;
            echo " hi";
        }
        protected function dis()
        {
            echo "this is a ". $this->name. " and model is ".$this->model ."<br>";
        }
    }
    class ajay extends Abc
    {
        protected function display()
        {
            echo " Hello <br>";
            $this->dis();
        }
    }
    class ajaybir extends Abc//multilevel inheritance
    {
        public function display12()
        {
            echo " student<br>  ";
            $this->dis(); //generates error
        }
    }
    $obj = new ajaybir("Volva","twinty");
    
     $obj->display12();
     
   
?>