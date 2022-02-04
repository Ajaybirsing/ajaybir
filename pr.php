<?php
    define("TEST",70);
    echo TEST;
    echo"<br>";
    $a = 10;
    echo"<br>";
    $a++;
    echo $a;
    echo"<br>";
    ++$a;
    echo $a;
    echo"<br>";
    ++$a;
    echo $a;
    echo"<br>";
    --$a;
    echo $a;
    echo"<br>";
    ++$a;
    echo $a;
    echo"<br>";
    $a--;
    echo"<br>";
    echo $a;
?>
<?php
    $b=40;
    $z = ($b>20)? "Greater":"Smalller";
    echo $z;

    for($i=1;$i<=10;$i++)
    {
        // echo $i."<br>";
        if($i==5){
            goto abc;
        }
        echo $i. "<br>";
    }
    echo "<br>";
    abc:
    echo "Hi ajay ";
?> -->