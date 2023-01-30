<?php 

class Cars{

    public $wheel_count = 4;
    private $door_count = 5;
    protected $set_count = 2;

    function get_value(){

        echo $this->door_count;    
    }

    function set_value(){
        $this->door_count = 10;
    }
    
}

$bmw = new Cars;

$bmw->set_value();
$bmw->get_value();


?>