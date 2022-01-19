<?php
    class Ajay
    {
        public  $num, $mum;
        public function __construct($n,$m)
        {
            $this->num =$n;
            $this->mum= $m;
            $this->num=$n+$m;
            

            print "Addition function";
        }
        function get()
        {
            
            echo "<br>Addion of two no. is:- ".$this->num;
        }
    }
    $obj=new Ajay(12 , 14);
    $obj->get();
    

?>