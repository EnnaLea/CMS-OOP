<?php
require_once('dog-class.php');
require_once('student.php');

$lab = new Dog('Fred', 'Lab', 'Yellow','100', 'Male');
list($name_error, $breed_error, $color_error, $weight_error, $gender_error) = explode(',', $lab);

// --------------Set Methods------------------------------
print $name_error == 'TRUE' ? 'Name update successful<br/>' : 'Name update not
successful<br/>';
print $breed_error == 'TRUE' ? 'Breed update successful<br/>' : 'Breed update not
successful<br/>';
print $color_error == 'TRUE' ? 'Color update successful<br/>' : 'Color update not
successful<br/>';
print $weight_error == 'TRUE' ? 'Weight update successful<br/>' : 'Weight update not
successful<br/>';
print $gender_error == 'TRUE' ? 'Gendert update successful<br/>' : 'Gender update not
successful<br/>';

// -----------------Get Methods------------------------------------------
print $lab->get_dog_name() . "<br/>";
print $lab->get_dog_weight() . "<br />";
print $lab->get_dog_breed() . "<br />";
print $lab->get_dog_color() . "<br />";
print $lab->get_dog_gender() . "<br />";
$dog_properties = $lab->get_properties();
list($dog_weight, $dog_breed, $dog_color, $dog_gender) = explode(',', $dog_properties);
print "Dog weight is $dog_weight. Dog breed is $dog_breed. Dog color is $dog_color. Dog gender is $dog_gender";




$class = new Student('12', 'via madonna di pettino', 'Silvia', 'fuori corso', '67100', '25');




print $class->get_student_id() . "<br/>";
print $class->get_student_address() . "<br />";
print $class->get_student_name() . "<br />";
print $class->get_student_state() . "<br />";
print $class->get_student_zip() . "<br />";
print $class->get_student_age() . "<br />";
$class_properties = $class->get_properties();
list($id_error, $address_error, $name_error, $state_error, $zip_error, $age_error) = explode(',', $class);

// $class->set_student_address('via XX settembere');
// $class->set_student_id('13');






?>