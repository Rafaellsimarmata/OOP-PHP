<?php 
 
require_once "person.php";

// object Person1 yang memiliki variabel Name, Class, Age
$person1 = new person();
$person1->name;
$person1->class = "XII";
$person1->age = "17";

// object Person2 yang memiliki variabel Name, Class, Age
$person2 = new person();
$person2->name = "Randy";
$person2->class = "VII";
$person2->age = "15";

echo " Nama : " . $person1->name . PHP_EOL;
echo " Class : " . $person1->class . PHP_EOL;








?>