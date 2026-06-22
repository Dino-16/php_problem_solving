<?php

/*
Challenge: Manual Factorial Sequence Generator
Scenario: You want to generate a mathematical sequence of numbers where each number is multiplied by the numbers that came before it. 
You want to build this sequence array manually one element at a time.

Input Specification:

PHP
$steps = 5; // Generate 5 levels of growth
Strict Constraints: Do not use range() or any math extension functions. Use a standard for loop and a tracking variable.

Objective: 1. Initialize a running product tracker at 1 and an empty results array.
2. Run a loop from 1 up to $steps. Multiply your tracker by the current loop number at each step.
3. Manually push each new product calculation into your results array.
4. Print the final array, which should look like: [1, 2, 6, 24, 120].
*/

$steps = 5;

$product = 1;          // tracker starts at 1
$results = [];         // empty array to hold sequence

for ($i = 1; $i <= $steps; $i++) {
    $product *= $i;    // multiply tracker by current loop number
    $results[] = $product; // manually push into results array
}

print_r($results);