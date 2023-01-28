<?php 
class Cat{
    private $cat_breed = "no breed";
    private $cat_color = "no color";
    private $cat_name = "no name";
    private $cat_size = "no size";

    function display_properties(){
        echo "Cat informations are: $this->cat_breed. $this->cat_color. 
        $this->cat_name. $this->cat_size";
    }

    function speak(){
        echo "Miaoo!";
    }

}

?>