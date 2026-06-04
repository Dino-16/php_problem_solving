<?php

/*
Challenge: Basic Profile Data Extraction
Scenario: You have a simple associative array that stores information about a user. Instead of using a loop, 
you want to practice accessing specific pieces of information directly using their descriptive keys.

Input Specification:

PHP
$userProfile = [
    "username" => "coder_99",
    "email" => "alex@example.com",
    "role" => "student",
    "status" => "active"
];
Optimization Constraints: Do not use loops (for or foreach) or built-in functions like array_keys() or array_values(). 
Practice reading directly from the array using the square bracket notation ($array['key']).

Objective: 
1. Check if the user's "status" key equals "active".
2. If it is active, print a message that combines their "username" and "role" (for example: "User coder_99 is a student").
3. If the status is not active, print "Account is disabled".
*/


$userProfile = [
    "username" => "coder_99",
    "email" => "alex@example.com",
    "role" => "student",
    "status" => "active"
];

echo $userProfile["status"] . PHP_EOL;
if($userProfile["status"] == "active") {
    echo $userProfile["username"] . "is a " . $userProfile["role"] . PHP_EOL;
} else {
    echo "Account is disabled";
}