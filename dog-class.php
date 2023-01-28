<?php 

class Dog{
    private $dog_weight = 0;
    private $dog_breed = "no breeed";
    private $dog_color = "no color";
    private $dog_name = "no name";

    function set_dog_name($value){
        $error_message = TRUE;
        (ctype_alpha($value)&& strlen($value) < 21) ? $this->dog_name = 
        $value : $error_message = FALSE;
        return $error_message; 
    }

    function get_properties()
    {
        return "$this->dog_weight, $this->dog_breed, $this->dog_color.";

    }

    function get_speak(){
        return "BARK! BARK!";
    }


}

?>