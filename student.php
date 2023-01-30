<?php 

class Student{
    private $student_id = 0;
    private $student_address = "no address";
    private $student_name = "no name";
    private $student_state = "no state";
    private $student_zip = "no zip";
    private $student_age = "0";

    private $error_message = "no error";



    // -----------------Constructor-----------------------------
    function __construct($value1, $value2, $value3, $value4, $value5, $value6)
{
    $id_error = $this->set_student_id($value1) == TRUE 
     ? 'TRUE,' : 'FALSE,';
    $address_error = $this->set_student_address($value2) == TRUE 
     ? 'TRUE,' : 'FALSE,';
    $name_error = $this->set_student_name($value3) == TRUE 
     ? 'TRUE,' : 'FALSE,';
    $state_error = $this->set_student_state($value4) == TRUE 
     ? 'TRUE,' : 'FALSE,';
    $zip_error = $this->set_student_zip($value5) == TRUE 
     ? 'TRUE,' : 'FALSE,';
    $age_error = $this->set_student_age($value6) == TRUE 
     ? 'TRUE,' : 'FALSE,';

     $this->error_message = $id_error . $address_error . $name_error . $state_error . $zip_error . $age_error ;
}

// to string
public function __toString(){
        return $this->error_message; 
}

// setter methods
function set_student_id($value){
    $error_message = TRUE;
    (ctype_digit($value)&& ($value > 0 && $value <= 10) ) ? $this->student_id = $value : $error_message = FALSE;
        return $error_message;
}

function set_student_address($value){
    $error_message = TRUE;
    (ctype_alpha($value)&& strlen($value) < 21) ? $this->student_address = $value : $error_message = FALSE;
    return $error_message; 
}
function set_student_name($value){
    $error_message = TRUE;
    (ctype_alpha($value)&& strlen($value) < 21) ? $this->student_name= $value : $error_message = FALSE;
    return $error_message; 
}
function set_student_state($value){
    $error_message = TRUE;
    (ctype_alpha($value)&& strlen($value) < 21) ? $this->student_state= $value : $error_message = FALSE;
    return $error_message; 
}
function set_student_zip($value){
    $error_message = TRUE;
    (ctype_alpha($value)&& strlen($value) < 21) ? $this->student_zip= $value : $error_message = FALSE;
    return $error_message; 
}
function set_student_age($value){
    $error_message = TRUE;
    (ctype_digit($value)&& ($value > 0 && $value <= 199) ) ? $this->student_age = $value : $error_message = FALSE;
        return $error_message;
}

// get methods
function get_student_id()
{
return $this->student_id;
}
function get_student_address()
{
return $this->student_address;
}
function get_student_name()
{
return $this->student_name;
}
function get_student_state()
{
return $this->student_state;
}
function get_student_zip()
{
return $this->student_zip;
}
function get_student_age()
{
return $this->student_age;
}

function get_properties()
{
return $this->student_id . $this->student_address. $this->student_name . $this->student_state. $this->student_zip. $this->student_age ;
}

}

?>