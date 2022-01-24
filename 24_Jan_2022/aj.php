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

    // $ab= array_column($arr,"first_name");
    // echo "<br>";
    // echo"<pre>";
    // print_r ($ab);
    // echo "</pre>";

     
    // echo $arr[0]['first_name'];

    // for($i=0; $i<3; $i++) {
        foreach($arr as $key => $value) {
            // echo $key;
            foreach($value as $name => $n) {
              
              //echo $name;
               if($name == "first_name"){
                   $a=array($n);
                   echo"<br>";
                   print_r($a);
               }
            
              
               
                
            }
        }
    // }
    // for($i=0; $i<3; $i++)
    // {
    //     echo $i;
    // }

?>