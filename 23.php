<?php

/*
Challenge: Manual First-and-Last Value Swap
Scenario: You have an array of user IDs, and you want to swap the positions of the very first person and the very last person in the list without altering any of 
the items in the middle.

Input Specification:

PHP
$users = ["User_A", "User_B", "User_C", "User_D", "User_E"];
Strict Constraints: Do not use array_shift(), array_pop(), or any sorting/reversing functions. 
You must use array index targeting and a single temporary placeholder variable.

Objective: 1. Identify the first index (0) and manually find the last index of the array.
2. Store the value of the first index inside a temporary variable so it doesn't get overwritten.
3. Assign the value of the last index to the first index.
4. Assign the temporary variable's value to the last index.
5. Print the array to show the swapped result (["User_E", "User_B", "User_C", "User_D", "User_A"]).
*/

$users = ["User_A", "User_B", "User_C", "User_D", "User_E"];

$firstIndex = 0;
$lastIndex = count($users) - 1;

$temp = $users[$firstIndex];


$users[$firstIndex] = $users[$lastIndex];
$users[$lastIndex] = $temp;

print_r($users);
