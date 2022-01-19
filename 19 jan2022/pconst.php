<?php
    class Base
    {

        protected function __construct(&$word)
        {
            return $word;
            echo"hello";
        }
    }
    class Subclass extends Base 
    {
        public function __construct($w)
        {
            $this->word=$w;
            echo "hello sir <br>";
            echo $w;
        }
    }

    $obj=new Subclass("Ajaybir");
?>