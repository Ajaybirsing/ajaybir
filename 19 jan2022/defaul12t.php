<?php
    class Baseclass
    {
        public function __construct()
        {
            print "base class <br>";
        }
    }
    class Subclass extends Baseclass
    {
        public function __construct()
        {
            print "sub class <br>";
        }
    }
    class Supersubclass extends Subclass 
    {
        protected function __construct()
        {
            print "super sub base class <br>";
        }
    
    }
    $obj1=new Baseclass();
    $obj2=new Subclass();
    $obj3=new Supersubclass();
?>