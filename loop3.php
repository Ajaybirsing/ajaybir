<?php
    for($i=5;$i>0; $i--){
        for($j=$i;$j<5;$j++)
        echo"&nbsp;&nbsp;";
        for($k=$i*2;$k>1;$k--)
        echo"*";
        echo"<br>";
        
    }
?>
<?php
    for($i=1;$i<5;$i++)
    {
        for($j=5;$j>=1;$j--){
        if($i==$j)
        
            echo"*";
        else
            echo"&nbsp;&nbsp;";
        }
        for($k=2;$k<=5;$k++)
        {
        if($i == $k)
            echo"*";
        else
            echo"&nbsp;&nbsp;";
        }
        echo"<br>";

    }
?>