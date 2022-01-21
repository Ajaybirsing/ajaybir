<?php
    class base
    {
        public static $name;
        private static $age;
        protected static $weight;
        public static function show($n,$a,$w)
        {
            echo self :: $name =$n;
            echo self :: $age=$a ;
            echo self :: $weight=$w;
            
        }
       /* public function __construct($n,$a,$w)
        {
            self :: $name = $n;
            self :: $age = $a;
            self :: $weight = $w;
        }
    }*/
    }
    class subclass extends base
    {
        //echo "Ajaybir is my good name";
    }
        
    subclass:: show("Ajay", "22","70");
?>