<?php
    $arr= array(
        array("id"=>"201",
        "first_name"=> "Ajaybir",
        "Lastname" => "Singh"),

        array("id"=>"202",
        "first_name"=> "Salman",
        "Lastname" => "Khan"),

        array("id"=>"203",
        "first_name"=> "Ramesh",
        "Lastname" => "Singh")

        

    );
    echo "<br>";
    echo "<pre>";
    print_r($arr);
    echo "</pre>";

    // array column function used
    $aj = array_column($arr, "first_name","id");
    echo "<pre>";
    print_r($aj);
    echo "</pre>";

    //array pair in two or three 
    $ak=["Ajay","Ram","sham","Aman","Amit","Sumit"];
    $an= array_chunk($ak,2);
    echo "<pre>";
    print_r($an);
    echo "</pre>";
    //find largest element in array
    $a=[1,2,3,4,5,6,7,75];
    $b=[3,2,1,4,5,7,78,8];
    echo"Largest element is:- ";

    print_r(max($a));
    echo"<br>";
    echo"Smallest element in array is:- ";
    print_r(min($a));

    echo "<pre>";
    print_r($a+$b);
    echo "</pre>";
    
    
?>