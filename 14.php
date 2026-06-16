<?php

/*
Challenge: Frequency Counting with array_count_values()
Scenario: A small voting system collected electronic ballots for a favorite color. 
You need to quickly tally up the results to find out exactly how many votes each color received.

Input Specification:

PHP
$votes = ["Red", "Blue", "Red", "Green", "Blue", "Red"];
Optimization Constraints: Do not use any manual tracking loops or counters. 
You must use PHP's built-in array_count_values() function to generate the tally.

Objective: 1. Pass the $votes array into array_count_values().
2. Print the resulting associative array to show the total vote count for each color (e.g., ["Red" => 3, "Blue" => 2, "Green" => 1]).
*/


$votes = ["Red", "Blue", "Red", "Green", "Blue", "Red"];

$voteCount = array_count_values($votes);

print_r($voteCount);