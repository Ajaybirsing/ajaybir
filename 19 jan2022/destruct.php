<?php
    class base
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
            
            echo "<br>Addion of two no. is  ".$this->num;
        }
        function __destruct()
        {
            echo "<br>This is a destructor <br>";
        }
    }
    $obj=new base(2 , 4);
    $obj->get();
    

?>