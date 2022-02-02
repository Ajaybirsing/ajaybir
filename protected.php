<?php
    class ab{
        public $num;
        function __construct()
        {
            echo "HI ajay How are You! <br>";
            $this->num=8;
            // echo $num;
        }
        
        
    }
    
    $obj=new ab();
    $obj->$num=5;
    echo $obj->$num;
    // ab::show();
    
    
?>