<?php

/*
Challenge: Filtering Numbers with Built-in Functions
Scenario: You have a list of numbers, and you want to clean it up. You only want to keep the numbers that are greater than a specific target number, 
and you want to use PHP's built-in tools to do it quickly.

Input Specification:

PHP
$numbers = [5, 12, 18, 3, 9, 25, 7];
$threshold = 10;
Optimization Constraints: Instead of writing a manual loop using foreach, you must use PHP's built-in array_filter() function to handle the filtering for you.

Objective: 1. Use array_filter() to create a new array containing only the numbers from $numbers that are strictly greater than $threshold.
2. Print the final filtered array to the screen.
*/

$numbers = [5, 12, 18, 3, 9, 25, 7];
$threshold = 10;

$filteredNumbers = array_filter($numbers, function($n) {
    global $threshold;
    return $n < $threshold;
});

print_r($filteredNumbers);