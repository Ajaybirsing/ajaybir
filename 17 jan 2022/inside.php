<?php
//inside the class we can used function and also declare the properties and method inside the function//
    class Inside
    {
        public $name;
        function get_name($name)
        {
            $this->name=$name;
        }
    }
    $apple=new Inside();
    $apple->get_name('Apple');
    echo "Name of the fruit is:- ". $apple->name;
?>