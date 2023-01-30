<?php 

class Dog{
    private $dog_weight = 0;
    private $dog_breed = "no breeed";
    private $dog_color = "no color";
    private $dog_name = "no name";
    private $dog_gender = "no gender";
    private $error_message = "??";

// --------------Constructor------------------------------
    function __construct($value1, $value2, $value3, $value4, $value5)
    {
        $name_error = $this->set_dog_name($value1) == TRUE 
         ? 'TRUE,' : 'FALSE,';
        $breed_error = $this->set_dog_breed($value2) == TRUE 
         ? 'TRUE,' : 'FALSE,';
        $color_error = $this->set_dog_color($value3) == TRUE 
         ? 'TRUE,' : 'FALSE,';
        $weight_error = $this->set_dog_weight($value4) == TRUE 
         ? 'TRUE,' : 'FALSE,';
        $gender_error = $this->set_dog_gender($value5) == TRUE 
         ? 'TRUE' : 'FALSE';

         $this->error_message = $name_error . $breed_error . $color_error . $weight_error . $gender_error;
    }

// ------------ToString----------------------------
public function __toString()
{
        return $this->error_message;  
}


    function set_dog_name($value){
        $error_message = TRUE;
        (ctype_alpha($value)&& strlen($value) < 21) ? $this->dog_name = 
        $value : $error_message = FALSE;
        return $error_message; 
    }
    function set_dog_weight($value){
        $error_message = TRUE;
        (ctype_digit($value)&& ($value > 0 && $value <= 120) ) ? $this->dog_weight = 
        $value : $error_message = FALSE;
        return $error_message; 
    }
    function set_dog_breed($value){
        $error_message = TRUE;
        (ctype_alpha($value)&& strlen($value) < 21) ? $this->dog_breed = 
        $value : $error_message = FALSE;
        return $error_message; 
    }
    function set_dog_color($value){
        $error_message = TRUE;
        (ctype_alpha($value)&& strlen($value) < 21) ? $this->dog_color = 
        $value : $error_message = FALSE;
        return $error_message; 
    }
    function set_dog_gender($value){
        $value = strtolower($value);
        $error_message = TRUE;
        ($value == 'male' || $value == 'female') ? $this->dog_gender = 
         $value : $error_message = FALSE;
        return $error_message; 
    }

function get_dog_name()
{
return $this->dog_name;
}
function get_dog_weight()
{
return $this->dog_weight;
}
function get_dog_breed()
{
return $this->dog_breed;
}
function get_dog_color()
{
return $this->dog_color;
}
function get_dog_gender()
{
return $this->dog_gender;
}

function get_properties()
{
return "$this->dog_weight,$this->dog_breed,$this->dog_color,$this->dog_gender.";
}


}
?>
