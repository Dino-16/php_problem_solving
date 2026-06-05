<?php

/*
Challenge: Finding the Lowest and Highest Values
Scenario: You are given a list of daily temperatures. You want to find out what the coldest temperature and the hottest temperature were during that period.

Input Specification:

PHP
$temperatures = [22, 15, 31, 18, 27, 14, 29];
Strict Constraints: You cannot use built-in functions like min(), max(), sort(), or rsort(). You must find these values manually using a loop and two tracking variables (e.g., $lowest and $highest).

Objective: 
+1. Set up two variables to keep track of the lowest and highest numbers seen so far.
2. Loop through the array and use if statements to update your tracking variables whenever you find a number that is lower or higher.
3. Print both the final lowest and highest temperatures to the screen.
*/

$temperatures = [22, 15, 31, 18, 27, 14, 29];

$highest = $temperatures[0];
$lowest = $temperatures[0];

for($i = 0; $i < 7; $i++) {
    if($temperatures[$i] > $highest ) {
        $highest = $temperatures[$i];
    }

    if($temperatures[$i] < $lowest) {
        $lowest = $temperatures[$i];
    }
}

echo "Highest Temperature: $highest" . PHP_EOL;
echo "Lowest Temperature: $lowest" . PHP_EOL;