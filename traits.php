<?php
    
trait abc{
    public function show1(){
        echo "Hi ajaybir";
    }
}
class ab{
   use abc;
}
$obj= new ab();
$obj->show1();
?>
