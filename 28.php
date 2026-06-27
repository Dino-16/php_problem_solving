<?php

/*
Challenge: Manual Target Value Excluder
Scenario: You have a list of system status numbers. You need to loop through this list and remove all occurrences of a specific number, 
shifting the remaining valid numbers down to keep the array continuous.

Input Specification:

PHP
$statuses = [1, 5, 3, 5, 5, 2, 4];
$excludeValue = 5;
Strict Constraints: You cannot use array_filter(), unset(), or array_diff(). You must build a new array manually inside a loop using basic indexing logic.

Objective: 1. Initialize an empty array for your clean data.
2. Loop through $statuses and use an if statement to check if the current value is not equal to $excludeValue.
3. If it is a valid value, manually push it into your new array.
4. Print the final array, which should only contain [1, 3, 2, 4].
*/

$statuses = [1, 5, 3, 5, 5, 2, 4];
$excludeValue = 5;

$newArray = [];

for($i = 0; $i < count($statuses); $i++) {
    if($statuses[$i] != $excludeValue) {
        $newArray[] = $statuses[$i];
    }
}

print_r($newArray);