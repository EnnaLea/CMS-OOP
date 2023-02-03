<?php 

// magic costant: give information about location of file, directory, lines of code...

echo __FILE__;

echo "<br>";

echo __LINE__;

echo "<br>";

echo __DIR__;

echo "<br>";

if(file_exists(__DIR__)){
    echo "Yes!";
}

echo "<br>";

if(is_file(__DIR__)){
    echo "Yes!";
}else{
    echo "No!";
}

echo "<br>";

if(is_file(__FILE__)){
    echo "Yes!";
}else{
    echo "No!";
}

echo "<br>";

if(is_dir(__DIR__)){
    echo "Yes!";
}else{
    echo "No!";
}

echo "<br>";

echo file_exists(__FILE__) ? "Yes!" : "No!";







?>


