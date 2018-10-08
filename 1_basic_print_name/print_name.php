<?php
$first_name = "Jhon"; // setting first name in a variable
$last_name = "Doe"; // setting last name in a variable

$full_name = $first_name . " " . $last_name;

echo "Welcome {$full_name}! \n"; // printing the message using echo

print "Welcome {$full_name}! \n"; // printing the message using print

$msg = "Welcome %s! \n";
printf($msg, $full_name); // printing the message using printf
