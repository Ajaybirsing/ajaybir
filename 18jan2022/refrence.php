<?php
    function num(&$string)
    {
        $string.=" and age is 24";
    }
    $name="My name is ajay";
    num($name);
    echo $name;


?>
<?php
    function add(&$num)
    {
        $num +=7;
    }
    $number =10;
    add($number);
    echo "<br>" .$number;

?>