<?php 

class Cars{

    var $wheels = 4;



    function greatings(){
        return "Hello";
    }
    
}

$bmv = new Cars();


class Truck extends Cars{

}

$tacoma = new Truck();
echo $tacoma->wheels;


?>