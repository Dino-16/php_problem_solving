<?php

/*
Challenge: Manual Alternating Array Combination
Scenario: You have two separate lists of data containing exactly the same number of items. You want to merge them into a single list, 
but you want to alternate between them—taking the first item from List A, then the first from List B, then the second from List A, and so on.

Input Specification:

PHP
$letters = ["A", "B", "C"];
$numbers = [1, 2, 3];
Strict Constraints: Do not use array_merge(), array_combine(), or count(). You must use a standard counter-based for loop to look at corresponding positions and build a new array manually.

Objective: 1. Set up an empty array to hold the combined results.
2. Write a loop that steps through the indices (0, 1, 2).
3. Inside the loop, manually push the letter and then the number into your results array.
4. Print the final interleaved array (["A", 1, "B", 2, "C", 3]).
*/

$letters = ["A", "B", "C"];
$numbers = [1, 2, 3];

$emptyArray = [];

for($i = 0; $i < 3; $i++) {
    echo $emptyArray[] = $letters[$i];
    echo $emptyArray[] = $numbers[$i];
}



