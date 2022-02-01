<?php
    class ab{
        public $name;
        public function show($name){
            $this->name=$name;
            echo"hi ".$name;
        }
    }
    $obj=new ab();
    $obj->show("ajay<br>");
?>
<?php
    class abc{
        public static $name;
        public static function show($name){
            self::$name=$name;
            echo"hi ".$name;
        }
    }
    abc::show("AJay");
?>
<?php
    class xyz{
        public static $name= "Ajaybir"; 
        function __construct(){
            echo"Kawal";
        }
    }
    class a extends xyz{
        public static function show(){
        echo parent::$name;

        }
        public function __construct()
        {
            self::show();
            echo"Hi boy who are you!<br>";
        }
    }
    $obj=new a();
    a::show();
?>
<?php
    class xy{
        public static $name= "Ajaybir"; 
    }
    class ax extends xy{
        public static function show(){
        echo parent::$name;

        }
        public function __construct($n)
        {
            self::$name=$n;
            echo"<br>Hi boy who are you!<br>";
        }
    }
    $obj=new ax("WOW");
    ax::show();
?>