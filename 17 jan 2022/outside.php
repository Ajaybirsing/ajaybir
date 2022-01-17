<?php
    // outside the classs function we can used in this program//
    class outside
    {
        public $name;
    }
    $apple = new outside();
    $apple->name="Apple";
    echo $apple->name;
    var_dump($apple instanceof outside);
?>