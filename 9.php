<?php

/*
Challenge: Creating a Comma-Separated List
Scenario: You have an array containing a list of items to buy at the grocery store. You want to combine all of them into a single, clean sentence to read out loud.

Input Specification:

PHP
$groceryList = ["Apples", "Milk", "Bread", "Eggs"];
Strict Constraints: You cannot use the built-in implode() or join() functions. You must build the final string manually using a loop and string concatenation (using the . operator).

Objective: 
1. Create an empty string variable (e.g., $result = "";) before your loop starts.
2. Loop through the array and add each item to your string variable, putting a comma and a space between them.
3. Print the final sentence to the screen (it should look like: Apples, Milk, Bread, Eggs). Avoid having an extra leftover comma at the very end!
*/

$groceryList = ["Apples", "Milk", "Bread", "Eggs"];

$result = '';

for($i = 0; $i < 4; $i++) {
    if($i > 0) {
        $result .= ", ";
    }

    $result .= $groceryList[$i];
}

echo $result;
