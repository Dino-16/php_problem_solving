<?php

/*
Category 4: Value Modifications & Key Mapping
Challenge: String Case Transformation
Scenario: You have a simple list of lowercase names, and you want to transform all of them into uppercase names using built-in PHP functions.

Input Specification:

PHP
$names = ["alex", "ben", "chris", "dan"];
Optimization Constraints: You must use array_map() combined with PHP's built-in string function strtoupper() to handle the transformation without writing a manual loop.

Objective: 
1. Apply the built-in functions to convert every name in the array to uppercase letters.
2. Print the new array to see the updated capitalized names (["ALEX", "BEN", "CHRIS", "DAN"]).
*/


$names = ["alex", "ben", "chris", "dan"];

$newNames = array_map(function($name) {
    return strtoupper($name);
}, $names);

print_r($newNames);