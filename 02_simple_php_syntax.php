<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>

<!-- Variables
Define a variable named $name and assign it the value of your name.
Define a variable named $age and assign it the value of your age.
Define a variable named $address and assign it the value of your home address.
Define a variable named $hobbies and assign it the value of your hobbies.
Define a variable named $pet_peeve and assign it the value of your pet peeve.
Print the values of $name, $age, $address, $hobbies, and $pet_peeve using the echo statement, each on a new line. -->

     <?php
     $name = "Ramoya, Jemyll";
     $age = "22 yrs old";
     $address = "Apalit, Pampanga";
     $hobbies = "Playing Volleyball";
     $pet_peeve = "Cat HAHAHA chz I always want to win in an argument";
     echo $name . "\n";
     echo $age . "\n";
     echo $address . "\n";
     echo $hobbies . "\n";
     echo $pet_peeve . "\n";
     ?>


<!-- Single-line comment
Comment out the $hobbies and $pet_peeve variables using single-line comments in PHP. -->

<?php
     $name = "Ramoya, Jemyll";
     $age = "22 yrs old";
     $address = "Apalit, Pampanga";
    //  $hobbies = "Playing Volleyball";
    //  $pet_peeve = "Cat HAHAHA chz I always want to win in an argument";
     echo $name . "\n";
     echo $age . "\n";
     echo $address . "\n";
     echo $hobbies . "\n";
     echo $pet_peeve . "\n";
     ?>

<!-- Constants
Define a constant variable NAME and assign it the value of your name.
Define a constant variable AGE and assign it the value of your age.
Define a constant named ADDRESS and assign it the value of your home address.
Define a constant variable HOBBIES and assign it the value of your hobbies.
Define a constant variable PET_PEEVE and assign it the value of your pet peeve.
Print each constant value on a new line. -->

<?php
define("NAME", "Ramoya, Jemyll");
define("AGE", "22 yrs old");
define("ADDRESS", "Apalit, Pampanga");
define("HOBBIES", "Playing Volleyball");
define("PET_PEEVE", "Cat HAHAHA chz I always want to win in an argument");

echo NAME . "\n";
echo AGE . "\n";
echo ADDRESS . "\n";
echo HOBBIES . "\n";
echo PET_PEEVE . "\n";
?>

<!-- var_dump
Display the constant values of NAME, AGE, ADDRESS, HOBBIES, and PET_PEEVE using var_dump(). -->

<?php
define("NAME", "Ramoya, Jemyll");
define("AGE", "22 yrs old");
define("ADDRESS", "Apalit, Pampanga");
define("HOBBIES", "Playing Volleyball");
define("PET_PEEVE", "Cat HAHAHA chz I always want to win in an argument");

var_dump(NAME);
var_dump(AGE);
var_dump(ADDRESS);
var_dump(HOBBIES);
var_dump(PET_PEEVE);
?>

<!-- Multi-line comment
Create a multi-line comment explaining the reasoning behind your pet peeve. -->

<?php
/*
The reason behind my pet peeve,  
I think because I am the oldest 
child and I can say that I am an 
independent person HAHAHAHA char
*/
?>

</html>