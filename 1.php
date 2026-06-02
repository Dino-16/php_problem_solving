<?php

/*
Challenge: Manual Odd-Even Splitting
Scenario: You have a list of mixed numbers. Your task is to look at each number one by one, figure out if it is even or odd, and separate them into two different lists.

Input Specification:

PHP
$input = [12, 7, 5, 22, 14, 3, 9, 2];
Strict Constraints: You cannot use functions like count(), in_array(), or array_filter(). 
You must build this entirely using basic logic: a loop (foreach or for) to go through the numbers, and an if/else statement to check if a number is even or odd.

Objective: 1. Create an array that holds only the even numbers from the input.
2. Create a second array that holds only the odd numbers from the input.
3. Print both arrays to the screen to show the separated lists.
*/


$input = [12, 7, 5, 22, 14, 3, 9, 2];

$even = [];
$odd = [];

/*

// For each loop style

// Separate odd and even
foreach ($input as $value) {
    if ($value % 2 == 0) {
        $even[] = $value; // even numbers
    } else {
        $odd[] = $value;  // odd numbers
    }
}

// Print results
echo "Odd numbers:\n";
print_r($odd);

echo "Even numbers:\n";
print_r($even);

*/

// For Loop Style

for($i = 0; $i < 8; $i++) {
    if($input[$i] % 2 == 0) {
        $even[] = $input[$i];
    } else {
        $odd[] = $input[$i];
    }
}

for($i = 0; $i < 4; $i++) {
    echo $even[$i] . PHP_EOL;
}

for($i = 0; $i < 4; $i++) {
    echo $odd[$i] . PHP_EOL;
}