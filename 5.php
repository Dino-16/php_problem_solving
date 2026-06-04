<?php

/*
Challenge: Range-Based Status Flagging
Scenario: You are given a list of scores from an entry-level quiz. You need to look at each score and determine 
if the person "Passed", "Failed", or got a "Perfect Score" based on two specific cut-off points.

Input Specification:

PHP
$scores = [75, 45, 100, 85, 60, 30, 100];
$passingMark = 60;
$perfectMark = 100;
Strict Constraints: You cannot use in_array(), array_search(), or any array mapping functions. You must use a single foreach loop combined with if, elseif, and else statements.

Objective: 
1. Loop through the scores and check each value.
2. If the score is exactly $perfectMark, print "Perfect Score!".
3. If the score is equal to or greater than $passingMark (but less than 100), print "Passed".
4. If the score is less than $passingMark, print "Failed".
*/

$scores = [75, 45, 100, 85, 60, 30, 100];
$passingMark = 60;
$perfectMark = 100;

for($i = 0; $i < 7; $i++) {
    $score = $scores[$i];
    if($score == $perfectMark) {
        echo "Perfect Score!" . PHP_EOL;
    } elseif($score >= $passingMark && $score < $perfectMark) {
        echo "Passed". PHP_EOL;
    } else {
        echo "Failed". PHP_EOL;
    }
}

