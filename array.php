<?php
    $a=array(1,2,3,4,6,32,11);

    // echo"<br>";
    sort($a);
    echo"<br>";
    echo count ($a);
    echo"<br>";
    foreach($a as $val)
    {
        echo $val;
        echo"<br>";
    }
    // print_r($a);
    $ab=array(3,4,1,4,5,56,3);
    $len = count($ab);
    sort($ab);
    for($i=0;$i<$len;$i++)
    {
        echo $ab[$i]. "<br>";
    }
    $ak= array("Ajay"=>"bir","Kalpana"=>"Sharma","Amit"=>"Bisht");
    echo rsort($ab);
    foreach($ak as $key=>$vall)
    {
        echo $key.$vall;
        echo"<br>";
    }
    echo"<br>";
    asort($ak);
    foreach($ak as $key=> $vall)
    {
        echo $key.$vall;
        echo"<br>";
    }
    echo"<br>";
    arsort($ak);
    foreach($ak as $key=>$vall)
    {
        echo $key.$vall;
        echo"<br>";
    }
    echo"<br>";
    krsort($ak);
    foreach($ak as $key=>$vall)
    {
        echo $key.$vall;
        echo"<br>";
    }
    echo"<br>";
    
?>