<?php

/*
Challenge: Manual Strict Ascending Order Checker
Scenario: You have a small series of numbers representing steps on a stairs chart. 
You need to check the entire list to confirm if it is perfectly sorted in ascending order (where each step is strictly greater than the one before it).

Input Specification:

PHP
$steps = [3, 7, 12, 19, 15, 24];
Strict Constraints: Do not use sort(), asort(), or any other built-in sorting/matching mechanisms. You must use a single loop to compare neighboring items.

Objective: 1. Set up a boolean tracking variable named $isAscending and set it to true before the loop.
2. Loop through the array starting from the second index (1), comparing the current item to the item directly behind it.
3. If you find any item that is smaller than or equal to the previous item, flip $isAscending to false and stop the loop immediately.
4. Print "Sequence is Valid" if it remains true, or "Sequence is Broken" if it becomes false (since 15 is smaller than 19, it should output "Sequence is Broken").
*/

$steps = [3, 7, 12, 19, 21, 24];

$isAscending = true;


for ($i = 1; $i < count($steps); $i++) {
    if ($steps[$i] <= $steps[$i - 1]) {
        $isAscending = false;
        break; 
    }
}

if ($isAscending) {
    echo "Sequence is Valid";
} else {
    echo "Sequence is Broken";
}