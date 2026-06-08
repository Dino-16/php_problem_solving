<?php

/*
Challenge: Removing Duplicates with array_unique()
Scenario: A simple guestbook system allowed visitors to submit their names multiple times by accident. 
You want to quickly clean up the list so that every guest's name appears exactly once.

Input Specification:

PHP
$guestList = ["John", "Mary", "John", "Alex", "Mary", "Sam"];
Optimization Constraints: Do not use loops (for or foreach) to scan for duplicate values. You must use PHP's built-in array_unique() function to handle the deduplication instantly.

Objective: 
1. Pass the $guestList array through array_unique() to strip away all duplicate entries.
2. Print the cleaned array to show only the unique names (["John", "Mary", "Alex", "Sam"]).
 */

$guestList = ["John", "Mary", "John", "Alex", "Mary", "Sam"];

$unique =  array_unique($guestList);

print_r($unique);