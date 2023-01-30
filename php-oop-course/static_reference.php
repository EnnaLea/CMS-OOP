<?php 

class Cars{

    static $wheel_count = 4;

    static function car_detail(){
        echo self:: $wheel_count;
        
    }
    
}

class Truks extends Cars{


    static function display(){
        echo parent::car_detail();
    }
}

Truks::display();

?>