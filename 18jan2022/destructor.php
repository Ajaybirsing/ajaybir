<?php
    class Demo
    {
        public $name,$age;
        public function __construct($name1,$age1)
        {
            $this->name=$name1;
            $this->age=$age1;

           
        }
        function abc()
        {
            echo "My name is ". $this->name . " and my age is ".$this->age ."<br>";
        }
        function __destruct()
        {
            echo "This is a destructor <br>";
        }
    }
    $p1=new Demo("Ajaybir",29);
  
    $p1->abc();

?>