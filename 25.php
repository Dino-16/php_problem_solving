<?php

/*
Challenge: Manual Factorial Generator
Scenario: You want to calculate the factorial of a given number (for example, $5!$, which means multiplying $1 \times 2 \times 3 \times 4 \times 5$). 
You need to build this running multiplication using core loop logic.

Input Specification:
PHP
$targetNumber = 5;

Strict Constraints: Do not use any mathematical extension functions or built-in array operations. 

You must use a single for loop and a single manual tracking variable.

Objective: 1. Initialize a tracking variable (like $result) to 1.
2. Write a for loop that starts at 1 and increments up to and including $targetNumber.
3. Inside the loop, multiply your tracking variable by the current loop counter.
4. Print the final total multiplication result once the loop finishes (it should equal 120).
*/

$targetNumber = 5;
$result = 1;


for($i = 1; $i <= $targetNumber; $i++) {
    $result = $result * $i;
}

echo $result;