<?php     //----------------Simple Function-----------------------//
    function show()
    {
        echo "Hi ajaybir<br>";
    }
    show();
?>
<?php   //-----------------Using Anonymous--------------------//
    $a = function() 
        {
            echo "Hi ajaybir<br>";
        };
    $a();
?>
<?php  //---------------------using varibale scope ---------------//
    $a = function($b) 
        {
            echo "Hi ajaybir $b <br>";
        };
    $a(10);
?>
<?php  //---------------------global variable------------------//
    $x=30;
    $a = function($p) 
        {
            echo "Hi ajaybir $p<br>";
        };
    $a($x);
?>
<?php  //---------------------global variable------------------//
    $x=30;
    $y=20;
    // $z=44;
    $a = function ($x) use ($y) 
        {
            echo "value of x and y $y sum  $x sub<br>";
        };
    $a($x);
?>