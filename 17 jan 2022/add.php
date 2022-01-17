<?php
    class add
    {
        public $a,$b, $c;
        public function sum()
        {
            $this->c=$this->a + $this->b;
            return $this->c;
        }
        function sub()
        {
            $this->c=$this->a- $this->b;
            return $this->c;
        }
    }
        echo "Addition is :- ";
        $c1=new add();
        $c1->a=20;
        $c1->b=30;
        echo $c1->sum();

        echo "<br> Subtration is: -";
        $c2=new add();
        $c2->a =20;
        $c2->b=10;
        echo $c2->sub();
        echo "<br>Subrtaion of c1 is:- ". $c1->sub();
        echo "<br> addtion of c2 is :- ". $c2->sum();
    
?>