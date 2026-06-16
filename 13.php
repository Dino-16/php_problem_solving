<?php

/*
Challenge: Manual Missing Number Finder
Scenario: You are given an array containing a sequence of consecutive integers, but one number is missing from the middle of the sequence. 
You need to scan the list and figure out exactly which number is skipped.

Input Specification:

PHP
// The sequence should go from 10 to 16, but 13 is missing
$sequence = [10, 11, 12, 14, 15, 16];
Strict Constraints: Do not use array_diff(), in_array(), or range(). You must use a native loop (for or foreach) to inspect the elements.

Objective: 
1. Loop through the array starting from the second element.
2. Check if the current number is exactly 1 greater than the previous number.
3. If the difference is larger than 1, calculate and print the missing number, then stop the loop.
*/

$sequence = [10, 11, 12, 14, 15, 16];

for($i = 1; $i < count($sequence); $i++) {
    if($sequence[$i] != $sequence[$i -1] + 1) {
        $missing = $sequence[$i - 1] + 1;
        echo $missing;
    }
}