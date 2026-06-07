<?php

/*
Challenge: Instant Value Verification with in_array()
Scenario: A user wants to pick a color for their profile interface. You have a quick list of supported colors, and you need to confirm if their choice is allowed.

Input Specification:

PHP
$allowedColors = ["Red", "Blue", "Green", "Black"];
$userChoice = "Yellow";
Optimization Constraints: Do not use a loop to check the items one by one. You must use the built-in function in_array().

Objective: Pass the array and user choice into in_array() inside an conditional check, printing "Access Granted" if the color exists or "Color Not Supported" if it does not.
*/
$allowedColors = ["Red", "Blue", "Green", "Black"];
$userChoice = "Yellow";


if(in_array($userChoice, $allowedColors)) {
    echo "Access Granted";
} else {
    echo "Color Not Supported";
}