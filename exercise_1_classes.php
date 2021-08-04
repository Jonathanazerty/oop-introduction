<?php

declare(strict_types=1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require 'exercise_1_classes_beverage.php';
require 'exercise_2_extending.php';

/* EXERCISE 1
Create a class beverage.
Create the properties color (string), price (float) and temperature (string) and also foresee a construct.
Have a default value "cold" in the construct for temperature.
Remember for now we will use properties and methods that can be accessed from everywhere.
Make a getInfo function which returns "This beverage is <temperature> and <color>."
Instantiate an object which represents cola. Make sure that the color is set to black, the price equals 2 euro and the temperature to cold automatically
 print the getInfo on the screen.
print the temperature on the screen.
USE TYPEHINTING EVERYWHERE!
*/

$BloodyMary = new Beverage ( 9, 'red');
$Mojito = new Beverage ( 8, 'green');
$JackDaniels = new Beverage ( 10, 'black', 'room temperature');
$MintTea = new Beverage ( 4, 'dark yellow', 'warm');
$Coke = new Beverage ( 2, 'black');


$BloodyMary -> getInfo();
$Mojito -> getInfo();
$JackDaniels -> getInfo();
$MintTea -> getInfo();
$Coke -> getInfo();