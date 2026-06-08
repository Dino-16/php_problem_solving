<?php

/*
Challenge: Manual Element Shifting
Scenario: You have a list of steps in a workflow. You want to shift every item down by exactly one position so that the first item moves to the second slot, 
the second to the third, and so on. To make it a clean loop, the very last item should wrap around and become the new first item.

Input Specification:

PHP
$workflow = ["Step A", "Step B", "Step C", "Step D"];
Strict Constraints: Do not use array_unshift(), array_shift(), array_pop(), or array_push(). 
You must manipulate the array elements using indices and manual tracking variables inside a loop.

Objective: 
1. Save the last item ("Step D") into a temporary variable.
2. Use a loop to move the other items forward by one index.
3. Place the saved last item into the very first index (0).
4. Print the newly shifted array (["Step D", "Step A", "Step B", "Step C"]).
*/

$workflow = ["Step A", "Step B", "Step C", "Step D"];

$temp = $workflow[count($workflow) - 1];

for ($i = count($workflow) - 1; $i > 0; $i--) {
    $workflow[$i] = $workflow[$i - 1];
}

$workflow[0] = $temp;

print_r($workflow);