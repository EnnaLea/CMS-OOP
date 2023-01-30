<?php 

class Cars{
    function greating(){

    }
    function greating2(){

    }
}

$the_methods = get_class_methods('Cars');

foreach ($the_methods as $method) {
    echo $method . "<br>";
}

?>