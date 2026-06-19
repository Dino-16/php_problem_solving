<?php

/*
Challenge: Manual Multiplier Stop-Gate
Scenario: You have a list of numbers that you are multiplying together one by one to find a running total. However, 
if you hit a 0 in the list, any future multiplications will just result in 0. You need to process the array and immediately stop your calculations if a zero is detected.

Input Specification:

PHP
$factors = [2, 3, 5, 0, 10, 8];
Strict Constraints: Do not use in_array(), array_search(), or any mathematical helper functions. You must use a standard loop and the break statement to control the flow.

Objective: 1. Initialize a tracking variable to 1 (since multiplying by 0 starts at 0, you want to start your product at 1).
2. Loop through the numbers. Multiply your tracker by the current number.
3. If the current number is exactly 0, stop the loop immediately using break.
4. Print the final running product calculation right before the loop stopped.
*/

$factors = [2, 3, 5, 0, 10, 8];

$track = 1;

for($i = 1; $i < 7; $i++) {
    if ($factors[$i] == 0) {
        // stop immediately if zero is found
        break;
    }

    $track *= $factors[$i];
}

echo "Final product: " . $track;