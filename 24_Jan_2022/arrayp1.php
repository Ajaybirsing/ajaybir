
<?php
    
    $arr= ["x"=>"A","y"=>"B","Z"=>"C"];
    $output=[];

    foreach($arr as $keys => $values)
    {
        $tem=[];
        $tem[]=$keys;
        $tem[]= $values;
        $output[] = $tem;
    }
    echo "<pre>";

    print_r($output);
    var_dump($arr);
    echo "</pre>";
    $ab= array("Ajay","Bir","Singh");
    if(in_array("Ajay",$ab))
    {
        echo"successful find.<br>";

    }
    else
    {
        echo "can't find";
    }
    foreach($ab as $keys => $values)
    {
        echo "<br>";
        echo  "  ".$values;
        echo "=". $keys;
        
    }


?>