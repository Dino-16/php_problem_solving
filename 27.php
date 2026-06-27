<?php

/*
Challenge: Matching Items with array_intersect()
Scenario: You have two separate lists of favorite hobbies belonging to two different friends. 
You want to quickly find out which hobbies they have in common so they can plan an activity together.

Input Specification:

PHP
$friendA_hobbies = ["Gaming", "Hiking", "Cooking", "Reading"];
$friendB_hobbies = ["Cooking", "Running", "Gaming", "Swimming"];
Optimization Constraints: Do not use manual tracking flags or nested loops to compare the items. 
You must use PHP's built-in array_intersect() function to handle the comparison instantly.

Objective: 1. Pass both arrays into array_intersect() to find the matching elements.
2. Print the resulting array to show only the hobbies shared by both friends (["Gaming", "Cooking"]).
*/

$friendA_hobbies = ["Gaming", "Hiking", "Cooking", "Reading"];
$friendB_hobbies = ["Cooking", "Running", "Gaming", "Swimming"];

$intersect = array_intersect($friendA_hobbies, $friendB_hobbies);

print_r($intersect);
