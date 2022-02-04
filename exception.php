<?php
    function show($n)
    {
    try 
    {
        if($n<=0){
            throw new exception ("Enter a  vaid no.",404);
        }
        $n =$n/2;
        echo $n;
        
    }
    catch(exception $a){
       echo $a->getmessage();  
       echo"<br>";             
       echo "Error".$a->getcode();               
       echo"<br>";             
       echo $a->getline();               
       echo"<br>";             
    }
    finally{
        echo"<br>Code Execute<br>";
    }
    }
    show(0);
    show(6);
    show(8);
?>
<?php
    try{
        throw new exception ("Error ",404);

    }
    catch (exception $n)
    {
        echo"<br>";
       echo $n->getcode();
       echo"<br>";
       echo $n->getmessage();
       echo"<br>";
       
       echo $n->getline();
       echo"<br>";
       echo $n->getfile();
    }
?>