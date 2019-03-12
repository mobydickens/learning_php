<?php

//When using single quotes, nothing inside the single quotes will be evaluated.
//if you want to use variables in a string (evaluate what is in the string), you must use double quotes

$currency = "penny";

$exampleSentence = "A $currency saved is a $currency earned\n";

echo $exampleSentence;

$place = 2;

$placeExample = "{$place}nd place!!!";
// echo $placeExample;

// OR USE CONCATENATION - concat can be used with single quotes
echo $place."nd place!!!\n";

//here document

echo <<<EOT
Testing this thing
  It will print how I want
    -Yahoo Bitches
EOT;

//print vs echo - pretty much the same. Although ECHO can concat things together:
echo "\nEh ", "tu,", " Brute!!!";

$exampleToUpper = "\nTo be or not to be...";
$exampleToUpper = strtoupper($exampleToUpper);
echo $exampleToUpper;

$exampleToLower = "\nTO BE OR NOT...";
$exampleToLower = strtolower($exampleToLower);
echo $exampleToLower;

// length
$stringEx = "Hello worldy world";
$length = strlen($stringEx);
print $length;

//string position
echo "\n";
echo strpos($stringEx, "world", 7);
  // 3 params: the string, the character we want, the offset (optional)
  // string position is CASE SENSITIVE
  // if character is not found, return is an empty string

// string replace
// parameters: first param is the character we want to replace, second param is what we are replacing it with, third is the string in question, and there is an optional fourth that will return a count of how many times we replaced it. We would need to set that to a variable. (example: str_replace("l", "NO", $stringEx, $count);)
$replaced = str_replace("l", "NO", $stringEx);
echo "\n";
echo $replaced;

// substrings
// can use a negative param to start from end of string
// optional third parameter can say HOW MANY characters to take
echo "\n";
echo substr($stringEx, 6);

// string split
$splitArray = str_split($stringEx);
print_r($splitArray);
  // second parameter is how many characters to split at
$splitArray = str_split($stringEx, 4);
print_r($splitArray);
