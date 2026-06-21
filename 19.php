<?php

/*
Challenge: Manual Matrix Diagonal ExtractionScenario: You have a perfect $3 \times 3$ grid of numbers (a 2D array). 
You want to extract the numbers that run diagonally from the top-left corner to the bottom-right corner.

Input Specification:
PHP
$grid = [
    [10, 20, 30],
    [40, 50, 60],
    [70, 80, 90]
];

Strict Constraints: You cannot use any built-in array functions. You must use a single for loop and coordinate tracking keys.
Objective: 
1. Set up a loop using a counter variable (like $i = 0).
2. Use $i to pull the matching diagonal positions (e.g., $grid[$i][$i]).
3. Print out the three diagonal numbers (10, 50, and 90).
*/

$grid = [
    [10, 20, 30],
    [40, 50, 60],
    [70, 80, 90]
];

for($i = 0; $i < 3; $i++) {
    echo $grid[$i][$i];
}