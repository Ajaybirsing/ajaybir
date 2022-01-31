<?php
    for($i=1;$i<=15;$i++)
    {
        for($J=$i;$J<15;$J++)
          echo"&nbsp;";
        for($k=1;$k<$i;$k++)
          echo"*";
        echo"<br>";
    }
    
?>
<?php
for($i=5; $i>=1; $i--)
{
 for($j=1; $j<5; $j++)
  echo "&nbsp;";
 for($k=$i*2; $k>1; $k--)
  echo "*";
 echo "<br>";
}
echo "<br>";
?>
<?php
for($i=9;$i<10;$i++)
{
  ++$i;
  echo$i;
}

?>