<?php
    function statickeyword()
    {
        static $x=0;
        echo $x . "<br>";
        $x++;
    }
    statickeyword();
    statickeyword();
    statickeyword();
?>