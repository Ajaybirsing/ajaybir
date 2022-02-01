<?php
    $n=1;
    function increment(&$n)
    {
        $n=$n+1;
    }
    increment($n);
    echo $n;
    $m=$n;
    // $n= null;
    echo $n. "<br>".$m;
?>
<?php
    for($i=0;$i<10;$i++)
    {
        echo"Hello<br>";
    }
?>

<?php
    $a=array(1,2,3,4,5);
    $i=0;
    while($i<count($a))
    {
        echo $a[$i]."<br>";
        $i++;
    }
    foreach($a as $value){
        echo $value. "<br>";
    }
    for($j=0;$j<count($a);$j++)
    {
        echo $a[$j]."<br>";
    }
?>