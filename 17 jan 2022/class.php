<?php
// we are created a one class and used no. of function and at last call all the function with the help of objects//
    class Fruit
    {
        public $color, $name;
        function set_name($name)
        {
            $this->name=$name;
        }
        function get_name()
        {
            return $this->name;
        }
        function set_color($color)
        {
            $this->color=$color;
        }
        function get_color()
        {
            return $this->color;
        }
    }
    $apple=new Fruit();
    $banana=new Fruit();

    $red=new Fruit();
    $yellow=new Fruit();
   

    $apple->set_name('Apple=');
    $red->set_color('Red <br>');
    $banana-> set_name('banana =');
    $yellow->set_color('Yellow');

    echo $apple->get_name();
    echo $red->get_color();
    echo $banana->get_name();
    echo $yellow->get_color();

?>