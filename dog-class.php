<?php 

class Dog{
    private $dog_weight = 0;
    private $dog_breed = "no breeed";
    private $dog_color = "no color";
    private $dog_name = "no name";

    function get_properties()
    {
        Return "$this->dog_weight, $this->dog_breed, $this->dog_color.";

    }

    function get_speak(){
        Return "BARK! BARK!";
    }


}

?>