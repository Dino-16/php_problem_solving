<?php

/*
ChalCategory 3: Basic Arithmetic & Loop Operations
Challenge: Multiplied Sum Tracker
Scenario: You have an array of prices, and you want to calculate what the total cost would be if every single item's price was doubled.

Input Specification:

PHP
$prices = [10, 25, 5, 50];
Strict Constraints: You cannot use array_sum() or array_map(). You must use a standard loop and basic math operations.

Objective: 1. Set up a counter variable starting at 0 to track the total sum.
2. Loop through the array, multiply each individual number by 2, and add that result to your total sum variable.
3. Print the final total sum to the screen once the loop finishes.
*/

$prices = [10, 25, 5, 50];

$counter = 0;

for ($i = 0; $i < count($prices); $i++) {
    $prices[$i] = $prices[$i] * 2;   // double each value in the array
    $counter += $prices[$i];         // add doubled value to total
}

print_r($prices);   // show the doubled array
echo "Total doubled sum: " . $counter;