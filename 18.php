<?php

/*
Challenge: Breaking Strings Apart with explode()
Scenario: You are given a single string containing a list of tags separated by a hyphen (-). 
You want to break this single string apart into an actual index-based array of individual tags so you can work with them cleanly.

Input Specification:

PHP
$tagString = "html-css-javascript-php-laravel";
Optimization Constraints: Do not use manual string parsing loops or character-by-character matching. You must use PHP's built-in explode() function.

Objective: 1. Pass the delimiter ("-") and the $tagString variable into explode().
2. Print the resulting array to verify that the single string has been converted into five separate elements (["html", "css", "javascript", "php", "laravel"]).
*/

$tagString = "html-css-javascript-php-laravel";

$arrays = explode("-", $tagString);

foreach($arrays as $array) {
    echo $array . PHP_EOL;
}