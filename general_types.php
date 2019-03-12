<?php 

// constants are GLOBAL variables in PHP - can be accessed ANYWHERE
define("NEW_CONSTANT", "Hellow constant");
echo NEW_CONSTANT;

// returns "1" if variable IS an integer. Returns nothing if it is NOT an integer. 
$isAnInt = 1234;
echo is_int($isAnInt); 

// is_string() -> check if variable is a string
// is_bool -> check if variable is boolean
// is_float -> check if variable is a float

// to check if constant is defined: 
defined('NEW_CONSTANT');

