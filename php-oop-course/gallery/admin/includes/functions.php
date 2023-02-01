<?php

// autoload function for scanning the application for undeclared objects
function my_autoload($class){
    $class = strtolower($class);
    $the_path = "includes/{$class}.php";
if(is_file($the_path) && !class_exists($class)){
        include($the_path);
}



    spl_autoload_register('my_autoload');
}


?>