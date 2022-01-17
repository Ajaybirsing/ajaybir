<?php
    class cars
    {
        public $color,$model;
        public function put_value($color,$model)
        {
            $this->color= $color;
            $this->model= $model;
        }
        public function get_value()
        {
            echo "My car is ". $this->color . " and model is ". $this->model;
            
        }
    }
    $ab=new cars();
    $ab->put_value('Red','volvo');
    echo $ab->get_value();
    
    
?>