<?php

/*
Challenge: Manual Multi-Word Censorship Loop
Scenario: You have a list of text tokens representing words in a chat message. 
You need to scan the list and automatically replace specific prohibited words with a filler string ("REDACTED") without altering any other words.

Input Specification:

PHP
$chatMessage = ["Hello", "secret", "world", "secret", "code"];
$forbiddenWord = "secret";
Strict Constraints: Do not use array_replace(), array_map(), or in_array(). You must use a standard loop and modify the array elements directly using their positional indices.

Objective: 1. Loop through the $chatMessage array.
2. Check if the current word matches $forbiddenWord.
3. If it matches, overwrite that specific index with the string "REDACTED".
4. Print the updated array to verify the change (["Hello", "REDACTED", "world", "REDACTED", "code"]).
*/

$chatMessage = ["Hello", "secret", "world", "secret", "code"];
$forbiddenWord = "secret";

for($i = 0; $i < count($chatMessage); $i++) {
    if($chatMessage[$i] == $forbiddenWord) {
        $chatMessage[$i] = "REDACTED";
    }

    echo $chatMessage[$i];
}