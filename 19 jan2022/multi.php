<?php
    $ajay = array
    (
        array(1,"Ajay",3000),
        array(2,"Monu",13000),
        array(3,"AjayBIR",3000)
        
    );
    echo "<h2>This Array is a Associated array</h2>";
    for($i=0;$i<3;$i++)
    {
        for($j=0;$j<3;$j++)
        {
            echo $ajay[$i] [$j]." ";
        }
        echo "<br>";
    }


?>