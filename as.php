
<?php    //recursion 
    function dis($num)
    {
        if($num<5){
            echo "Recursion is ".$num."<br>";
            dis($num+1);
        }
    }
    dis(1);
?>
<?php
    // factorial ! 5X4X3X2X1=120
    function dis1($n)
    {
        if($n == 0){
            return 1;
        }
        else{
            return ($n * dis1($n-1));
            echo "<br>";
        }
    }
    echo dis1(5);

?>
<?php
    $a=1;
    for($i=5;$i>1;$i--)
    {
        // echo "<br>Factorial is ".$a*$i."<br>";
        
        echo"<br>";
        echo $a= $a*$i;
        echo"<br>";
    }

?>