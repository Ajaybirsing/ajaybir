
<?php
    function show()
    {
        echo"Akajadklndl";
    }
  
    show();
    echo"<br>"; 
    echo $_SERVER['SERVER_NAME'] ;
    echo"<br>"; 
    echo $_SERVER['PHP_SELF'] ;
    echo"<br>"; 

    echo $_SERVER['HTTP_REFERER'] ;
    echo"<br>"; 


?>
<?php
    $a= "Ajaybir";
    $b=strlen($a);
    echo $b;
    for($i=$b-1;$i>=0;$i--)
    {
        echo $a[$i];
    }
    $c = strrev($a);
    echo"<br>";
    echo $c;
?>
<?php
    // $a = 
?>