<?php   // simple class access the data through objects.
    class personal
    {
        public $name="My name is Ajaybir";
        public function show()
        {
            echo $this->name;
        }        
    }
    $test= new personal();
    $test->show();
   // $test->name;      //Output is My name is Ajaybir.

?>

<?php    // using static keyword
    class base
    {
        public static $name ="Ajaybir<br>"; 
        public static function show()
        {
            echo self :: $name;
        }
    }
    echo base:: $name;
    base:: show(); // output Ajaybir Ajaybir
    
?>
<?php    // using static keyword with constructor 
    class base1
    {
        public static $name =" hi Ajaybir, How are you <br>"; 
        public static function show()
        {
            echo self :: $name;
        }
        public function __construct()
        {
            echo self :: $name;
        }
    }
    $obj1= new base1();
    $obj1->show();
// output is :-My name is Ajaybir Ajaybir
//Ajaybir
//hi Ajaybir, How are you
//hi Ajaybir, How are you
    
?>
<?php    // using static keyword with constructor 
    class base2
    {
        public static $name =" hi Ajaybir, How are you <br>"; 
        public static function show()
        {
            echo self :: $name;
        }
        public function __construct($n)
        {
            self :: $name = $n;
        }
    }
    $obj1= new base2("Wow");
    $obj1->show();
?>