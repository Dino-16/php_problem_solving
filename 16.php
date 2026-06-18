<?php

/*
Challenge: Flipping Collections with array_reverse()
Scenario: You have a simple timeline array showing a user's recent actions from oldest to newest. 
For their profile dashboard, you want to invert the order of this list instantly so that the most recent action appears first.

Input Specification:

PHP
$timeline = ["Logged In", "Viewed Profile", "Updated Settings", "Logged Out"];
Optimization Constraints: Do not use manual decrementing loops or reverse tracking indices. You must use PHP's built-in array_reverse() function.

Objective: 1. Pass the $timeline array into array_reverse().
2. Print the final inverted array to confirm the sequence has been flipped (["Logged Out", "Updated Settings", "Viewed Profile", "Logged In"]).
*/

$timeline = ["Logged In", "Viewed Profile", "Updated Settings", "Logged Out"];

$reverseTimeline = array_reverse($timeline);

for($i = 0; $i < 4; $i++) {
    echo $reverseTimeline[$i] . PHP_EOL;
}