<?php

/*
Challenge: Pulling Top Subsets with array_slice()
Scenario: You have an array of student scores that is already sorted from highest to lowest. 
You want to instantly extract just the top 3 highest scores to announce the winners.

Input Specification:

PHP
$leaderboard = [98, 95, 92, 88, 85, 79];
Optimization Constraints: Do not use loops to count or pull items manually. You must use PHP's built-in array_slice() function.

Objective: 
1. Use array_slice() to extract the first 3 elements from the $leaderboard array.
2. Print the final sliced array to show the top 3 scores ([98, 95, 92]).
*/

$leaderboard = [98, 95, 92, 88, 85, 79];

$topScores = array_slice($leaderboard, 0, 3);

for($i = 0; $i < count($topScores); $i++) {
    echo $topScores[$i];
}