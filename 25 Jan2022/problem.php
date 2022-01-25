<?php
    class Ab{
        function show($n)
        {
            echo "Hello $n , How are You! <br>";
        }
    }
    interface Ac{
        function show1($n);
       
    }
    interface Bc{
        function show2($n);

    }
    class Ad extends Ab implements Ac,Bc{
        function show1($n)
        {
            {
                echo "Hi i am a $n<br>";
            }

        }
        function show2($n)
        {
            echo "Hi Ajaybir $n<br>";
        }
    }
    $obj=new Ab();
    $obj1 = new Ad();
    $obj->show("Naid ");
    $obj1->show1("Developer");
    $obj1->show("Software ");
?>