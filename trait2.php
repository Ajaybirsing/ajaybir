<?php
    class base {
        public function show(){
            echo"I am a Robot<br>";
        }
    }
    trait base1{
        public function show(){
            parent :: show();
            echo "I am a human";
        }
    }
    class subclass extends base{
        use base1;
    }
    $obj = new subclass();
    $obj->show();
?>