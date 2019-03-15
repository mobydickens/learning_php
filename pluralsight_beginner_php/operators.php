<?php
// Exponentiation operator
4 ** 3;
// can also use it this way:
$useSameVar = 4;
$useSameVar **=3;

// incrementing operator
$alterByOne = 2;
$alterByOne++; //executes last
++$alterByOne; //executes first

// can also decrement
--$alterByOne; //before or behind as well

// can use string operator
$name = "William";
$name .= " Shakespeare";

// comparison operators
var_dump(8 == 8); //dumps out info about a variable
var_dump(8 === '8'); // identical comparison operator
var_dump(7 <> 6); //does 7 not equal 6? NOT EQUAL OPERATOR. Can also use !=
var_dump('7' !== 7); // not identical to compare types

// spaceship operator <=>
// returns three separate values
1 <=> 1;
// if return is 0, they are equal to each other
// if return is -1, the left hand side is less than right hand side
// if return is 1, the left hand side is greater than the right hand side

// LOGICAL OPERATOR - AND
$first = (6<7);
$second = (8 == 7);
var_dump($first and $second); //are they both true?
var_dump($first && $second); //can also write it this way, like JS

// LOGICAL OPERATOR - OR
var_dump($first or $second); //is one true?
var_dump($first || $second); //more common way to write the or

// LOGICAL OPERATOR - NOT
var_dump(!$first); // takes result and returns the opposite value (first is true, output is false)


// If statements
$authors = ["Alcott", "Dickens", "Tolstoy", "Nabokov"];
$authors = ["Penny"];
// $count = count($authors);

// if($count > 1)
// {
//   echo "There is a total of ".$count." authors!!!";
// }
// elseif($count === 1)
// {
//   echo "There is a total of 1 author!!!";
// }
// else
// {
//   echo "You have no authors";
// }

// while statement

$anotherAuthorExample = ["Alcott", "Dickens", "Tolstoy", "Nabokov"];
$count = count($anotherAuthorExample);

// switch($count)
// {
//   case 0: 
//     echo "You have no authors".PHP_EOL;
//     break;
//   case 1:
//     echo "You have 1 author!".PHP_EOL;
//     break;
//   default:
//     echo "You have ".$count." authors!".PHP_EOL;
//     break;
// };

// TERNARY OPERATOR
echo $outcome = ($count !== 0) ? "You have ".$count." authors!" : "No authors";

// NULL COALESCE OPERATOR

echo $outcome = $count ?? "count unavailable"; //if true, return that variable. If not, return result for false outcome. Only for determining if variable has been set. 

// WHILE LOOP
$readingIsFun = true;
$i = 0;
while($i < 5) :
  echo "Reading is rad\n";
  $i++;
endwhile;

// FOR LOOP
for($i = 0; $i<5; $i++)
{
  echo "Reading is fun!!!!!!\n";
};
// can also write as:
for($i = 0; $i<5; $i++) :
  echo "Reading is fun!!!!!!\n";
endfor;