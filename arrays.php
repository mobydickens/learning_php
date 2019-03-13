<?php

// there are 79 build in functions for arrays

// 2 ways to define an array
$myArray = array("hi", "gal", "wassup");
$books = ["Little Women", "Lolita", "Origin", "Six of Crows"];
$types = [2, 3, true, "hello", 0.45];

// print_r($types);
// print_r($books);
// print_r($myArray);

// associative arrays - when you alter a key (essentially objects)
$authors = array(
  "quirky" => "Charles Dickens",
  "beautiful" => "Jane Austen",
  "cool" => "Me"
);

// print_r($authors); 

// echo $books[1]; //can access indexes in array like normal
// echo $authors["beautiful"]; 

// KEY EXISTS
// echo array_key_exists(2, $myArray); //will return 1 if key exists

// IN ARRAY
// third optional parameter can check if type is the same with boolean
// echo in_array("Jane Austen", $authors);

// ADD ITEMS TO ARRAY WITH PUSH, array_push();
//array push will only add indexed values, not associative
array_push($books, "Carrie");
$books[] = "Fevre Dream"; // square brackets are preferred
print_r($books);

// adding to an associative array
$authors["funny looking"] = "George R.R. Martin";
print_r($authors);

// REMOVE FROM ARRAY - array_pop - removes last element from array, you can save it to a variable
$myPopped = array_pop($books);
echo $myPopped;

// UNSET
unset($books[1]);
print_r($authors);
  // can remove two items at once
  // unset($books['funny looking'], $books['cool']);

// SORTING
$sortTest1 = ["Carol", "Sarah", "Paige", "Shelley"];
$sortTest2 = array(
  "funny looking" => "Caroline",
  "coolio" => "Zeus",
  "magnifico" => "Shadow Moon"
);

//one optional param, 'sort flags'
sort($sortTest1);
print_r($sortTest1);

// if you try to sort associative array it will replace all the keys with index values and sort it

// to preserve keys use asort: 
// asort($sortTest2);
// print_r($sortTest2);

//ksort sorts by key value, great for associate arrays
ksort($sortTest2);
print_r($sortTest2);

// COUNT
echo count($sortTest2);

  // for deep counting (recursive) use second parameter for count function
  // can use 1 or COUNT_RECURSIVE <- PHP defined constant

// FOR EACH LOOP
foreach($sortTest2 as $person)
{
  echo $person."\n";
};

// get keys as well
foreach($sortTest2 as $key => $person)
{
  echo $person." (".$key.")\n";
};

// MULTIDIMENSIONAL ARRAYS
$authorsMulti = array(
  "male" => array(
    "Charles Dickens" => array("Oliver Twist", "A Christmas Carol"),
    "William Shakespeare" => array("Romeo and Juliet", "Hamlet", "Julius Ceasar")
  ),
  "female" => array(
    "Charlotte Bronte" => array("Shirley", "Jane Eyre"),
    "Jane Austen" => array("Pride and Prejudice", "Emma")
  )
);

print_r($authorsMulti["female"]["Jane Austen"][0]);



