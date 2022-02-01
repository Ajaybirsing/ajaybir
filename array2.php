<?php
    $a1= array("Ajay"=>array("Color"=>"Red","Fruit"=>"Green","vegitables"=>"Yellow"),
    "kamal"=>array("Apple"=>"Red","Banana"=>"Green","Grapes"=>"Yellow"),
    "Naid"=>array("Apple"=>"Red","Banana"=>"Green","Grapes"=>"Yellow") );
    echo"<table border='2px'>";
    foreach($a1 as $key => $values)
    {
        echo "<tr><td>".$key. "</td>";
           foreach($values as $v1){
               echo "<td>".$v1."</td>" ;
            }
        echo "<tr>";
    }
    "</table>"
?>
<?php
    $a1= array("Ajay"=>array("Color"=>"Red","Fruit"=>"Green","vegitables"=>"Yellow"),
    "kamal"=>array("Apple"=>"Red","Banana"=>"Green","Grapes"=>"Yellow"),
    "Naid"=>array("Apple"=>"Red","Banana"=>"Green","Grapes"=>"Yellow") );
    echo"<table border='2px'>";
    foreach($a1 as list($Apple,$Banana,$Grapes))
    {
        echo"<td><tr>$Apple</tr><tr>$Banana</tr><tr>$Grapes</tr>";
    }
    "</table>"
?>