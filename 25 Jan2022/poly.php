<?php
    interface Animal{
        function sound($s);
    }
    class Dog implements Animal{
        function sound($s)
        {
            echo "Dog is a faithfully animal $s <br>";
        }
    }
    class Cat implements Animal{
        function sound($s)
        {
            echo "cat is a cutest animal $s <br>";
        }
    }
    class Fox implements Animal{
        function sound($s)
        {
            echo "fox is a cleaver animal $s <br>";
        }
    }
    $obj= new Dog();
    $obj1= new cat();
    $obj2= new fox();

    $obj->sound("Gready");
    $obj1->sound("cleaver");
    $obj2->sound("strong");
    
?>