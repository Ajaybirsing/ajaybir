<?php
    class Demo
    {
        private $a="Hi ajaybir <br>";
        public function display()
        {
            echo $this->a;
        }
    }
    $obj=new Demo;
    $obj->display();
    var_dump($obj);
    
?>
<?php
 class Demo1
 {
     public $a="Hi ajaybir i am alaxa <br>";
     public function display()
     {
         echo $this->a;
     }
 }
 $obj=new Demo1;
 $obj->display();
 echo "<br>";
 var_dump($obj);// what type of data and memory is used of this variable //
  
    
?>