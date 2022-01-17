<?php
/* class created*/
class SimpleClass
{
    public $var1 = "A default variable";
 
    public function displayVar() //method declarartion//
    {
        echo $this->var1;//this variable is a pesudo variable//
    }
    
}
    $obj1 =new SimpleClass;
    $obj1->displayVar();





?>