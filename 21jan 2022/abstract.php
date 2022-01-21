<?php
    abstract class BaseClass
    {
        public $name;
        abstract protected function show($n,$m);
    }
    class child extends BaseClass
    {
        public function show($n,$m)
        {
            echo $n + $m;
        }

    }
    $obj=new child();
    $obj->show(10,20);
?>