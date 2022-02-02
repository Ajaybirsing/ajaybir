 
<?php
    // $a = array(1=>"Hello","1"=>"Ok", '1.9'=>"abc",true =>"def");
    // echo"<pre>";
    // print_r($a);
    // echo"</pre>";
   $a = [2,12,5];


   $a[1.5] = 12;
   $a[5] = 13;


   print_r($a);



    // foreach($a as $key => $val)
    // {
    //     echo $key ."  ".$val. "<br>";
    //     // echo $val;
        
    // }
?>
<?php
    $b="b";
    $b--;
    echo$b;

    $a =array(1,2,23,2,2);
    sort($a);
    
    $a[1]=8;
    echo"<pre>";
    print_r($a);
    echo"</pre>";
?>
<?php
    $a =array(1,2,23,2,2);
    sort($a);

    $a[1]=8;
    echo"<pre>";
    var_dump($a);
    echo"</pre>";
?>