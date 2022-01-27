<?php
    trait hello
    {
        public function base(){
            echo "Hi i am ajaybir<br>";
        }
    }
    trait hello1
    {
        public function abase(){
            echo "by by sir<br>";
        }
    }
    class base1
    {
        use hello,hello1;
    }
    class base2
    {
        use hello;
    }
    $obj= new base1;
    $obj1= new base2;                       

    $obj->base();
    $obj1->base();
    // $obj1->abase();
    $obj->abase();
    
?>