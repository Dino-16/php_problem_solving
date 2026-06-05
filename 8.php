<?php

/*
Challenge: Combining Names and Scores
Scenario: You have two separate lists that match up by their positions (indices). The first list contains the names of students, 
and the second list contains their exam scores. You want to pair them up and print them out together.

Input Specification:

PHP
$students = ["Anna", "Ben", "Charlie", "Dave"];
$scores   = [85, 92, 78, 88];
Optimization Constraints: Do not use array_combine() or array_merge(). Instead, use a standard index-based for loop (using a counter variable like $i) 
to look at the exact same position in both arrays at the same time.

Objective: 
1. Write a for loop that runs based on the number of items in the lists.
2. Inside the loop, use the current index to pull the name from $students and the score from $scores.
3. Print a line for each student like this: "Anna scored 85" or "Ben scored 92".
*/

$students = ["Anna", "Ben", "Charlie", "Dave"];
$scores   = [85, 92, 78, 88];



for($i = 0; $i < 4; $i++) {
    echo "$students[$i] scored $scores[$i]" . PHP_EOL;
}


