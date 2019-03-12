<?php

// there are 79 build in functions for arrays

// 2 ways to define an array
$myArray = array("hi", "gal", "wassup");
$books = ["Little Women", "Lolita", "Origin", "Six of Crows"];
$types = [2, 3, true, "hello", 0.45];

// print_r($types);
// print_r($books);
// print_r($myArray);

// associative arrays - when you alter a key
$authors = array(
  "quirky" => "Charles Dickens",
  "beautiful" => "Jane Austen",
  "cool" => "Me"
);

print_r($authors);