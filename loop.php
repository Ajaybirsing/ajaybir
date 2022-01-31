<?php
    for($i=1;$i<=5;$i++)
    {
        for($j=5;$j>=$i;$j--)
            echo"*";
            echo "<br>";
        
    }
    echo"<br>";
?>
<?php
for($i=1; $i<=5; $i++)
{
 for($j=5; $j>$i; $j--)
  echo "&nbsp;&nbsp;";
 for($k=2; $k<=$i*2; $k++)
  echo "*";
 echo "<br>";
}
echo "<br>";
?>
<?php
    for($i=1;$i<=5;$i++)
    {
        for($j=1;$j<$i;$j++)
            echo "&nbsp";
            for($k=5;$k>=$i;$k--)
            echo"*";
            echo "<br>";
        
    }
    echo"<br>";
?>