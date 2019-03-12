<?php

//general syntax:
function bookAuth()
{
  echo "William Shakespeare\n";
  echo "Charles Dickens\n";
}

// backslash n puts each string on its own line

// you may call the function before OR after the function declaration
// bookAuth();

//can use default parameters
function bookByAuthorYear($author, $year = 1993) 
{
  echo $year;
  echo "\n";
  echo $author;
  echo "\n";
}

function getAuthor() 
{
  return "Juliet Marillier";
}


$year = "1884";
$author = getAuthor();

bookByAuthorYear($author, $year);


// variable functions
function testVariableFunctionName()
{
  echo "Testing Testing!!!";
}

$functionName = "testVariableFunctionName";
$functionName();