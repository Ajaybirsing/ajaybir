<?php
    //index Array
    echo "<h2> Array concept</h2>";
    $session= array ("Ajay","Mohan", "Rohan","Nisha");
    echo"<h2>Array values are</h2>".$session[0]."<br>",$session[1]."<br>",$session[2]."<br>",$session[3]."<br>";

    // associated Array
    $associated= array("Ajay"=>"30200","Mohan"=>"20000", "Rohan"=>"22222","Nisha"=>"122221");
    echo "<h2>This Array is a Associated array</h2>";
    echo"Ajay Salary is:- ".$associated["Ajay"]."<br>","Mohan Salary is:- ".$associated["Mohan"]."<br>","Rohan Salary is:- ".$associated["Rohan"]."<br>","Nisha Salary is:- ".$associated["Nisha"];


    //traversal index array 
    echo"<br>";
    $ajay = array("Mohan","Sohan","Rohan","Ajay","Nisha","Naid","Sohang");
    echo "<h2>Traversal index Array </h2>";
    echo"<br>";
    foreach($ajay as $s)
    {
        echo"Array names is:- ".$s."<br>";

    }
    echo "Totel item of Ajay array is:- ".count($ajay);// count function used  and count no. of items

    //traversal associated array
    $associated1= array("Ajay"=>"30200","Mohan"=>"20000", "Rohan"=>"22222","Nisha"=>"122221");
    echo "<h2>This is a travesal Associated array using foreach</h2>";
    foreach($associated1 as $k => $v)
    {
        echo"keys: ".$k. "values:- ".$v."<br>";
    }
?>