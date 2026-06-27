<?php

/*
Challenge: Adding Queue Items with array_push()
Scenario: You are building a basic printing queue system. You have an initial list of active print jobs, 
and you want to use the standard language utilities to append two brand new incoming print jobs to the end of the line.

Input Specification:

PHP
$printQueue = ["Document_1.pdf", "Image_2.png"];
$newJobA = "Report_3.docx";
$newJobB = "Invoice_4.pdf";
Optimization Constraints: Do not use manual index tracking or direct bracket assignments (like $array[] = $value). You must use PHP's built-in array_push() function.

Objective: 1. Pass the $printQueue array along with $newJobA and $newJobB into array_push().
2. Print the final updated array to confirm the items were added sequentially to the end (["Document_1.pdf", "Image_2.png", "Report_3.docx", "Invoice_4.pdf"]).
*/

$printQueue = ["Document_1.pdf", "Image_2.png"];
$newJobA = "Report_3.docx";
$newJobB = "Invoice_4.pdf";

array_push($printQueue, $newJobA, $newJobB);

print_r($printQueue);   