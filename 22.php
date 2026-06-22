<?php

/*
Challenge: Shuffling a Deck with shuffle()
Scenario: You are setting up a basic card game backend. You have an array holding a list of card values in perfect order, 
and you need to mix them up randomly so the game is fair.

Input Specification:

PHP
$cards = ["Ace", "King", "Queen", "Jack", "Ten"];
Optimization Constraints: Do not write random-index calculation loops. You must use PHP's built-in shuffle() function.

Objective: 
1. Pass the $cards array into shuffle(). (Note: shuffle() modifies the original array directly).
2. Print the array to show the new, randomized order of cards.
*/

$cards = ["Ace", "King", "Queen", "Jack", "Ten"];
shuffle($cards); // shuffle modifies $cards directly

foreach ($cards as $item) {
    echo $item . "\n"; // add newline for readability
}
