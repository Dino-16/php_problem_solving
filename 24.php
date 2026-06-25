<?php

/*
Challenge: Combining Lists with array_merge()
Scenario: You are managing a store that sells fruits. You have a list of fruits currently in stock on your main display shelf, 
and a separate list of fruits arriving from the storage room. You want to quickly combine them into one master inventory list.

Input Specification:

PHP
$displayShelf = ["Apple", "Banana", "Orange"];
$storageRoom  = ["Mango", "Grape"];
Optimization Constraints: Do not use a manual loop to copy items from one array to another. You must use PHP's built-in array_merge() function.

Objective: 1. Pass both arrays into array_merge() to join them together.
2. Print the final combined array to verify that all five fruits are present in a single list (["Apple", "Banana", "Orange", "Mango", "Grape"]).
*/

$displayShelf = ["Apple", "Banana", "Orange"];
$storageRoom  = ["Mango", "Grape"];

$merge = array_merge($displayShelf, $storageRoom);

print_r($merge);