<?php 

class Cars{

    public $wheel_count = 4;
    private $door_count = 5;
    protected $set_count = 2;

    function car_detail(){
        echo $this->wheel_count;
        echo $this->door_count;
        echo $this->set_count;

        
    }
    
}

$bmw = new Cars();

// echo $bmw->wheel_count;
// echo $bmw->door_count;
// echo $bmw->set_count;

$bmw->car_detail();





?>