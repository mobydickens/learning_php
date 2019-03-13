<?php


//PROTECTED - method or property can only be accessed within the class itself. When you inherit a class, in order to get to a protected property or method, that protected item has to be enclosed in a public method that calls those protected items.

//PRIVATE - all private properties and methods can only be accessed inside of the class in which they are set. To access a private property you could call a public function in your inherited class, which triggers a protected function in the original class, which THEN could access the private variables or methods. 

// A class is a container - for code reuseability, maintainability and encapsulation
class Person
{

  // properties, or variables - public, private and protected
  // public variable can be accessed outside of class by other classes and by object variable
  //normally declared at the top of the class - can have default values
  const AVG_LIFE_SPAN = 89;
  public $firstName;
  public $lastName;
  public $yearBorn;
  //constructor will run when a new instance is defined
  function __construct($first = "", $last = "", $year = "")
  {
    $this->firstName = $first;
    $this->lastName = $last;
    $this->yearBorn = $year;
  }
  // by default all methods are set to public, even if keyword is not present
  public function getFirstName()
  {
    return $this->firstName;
  }
  public function setFirstName($tempName)
  {
    $this->firstName = $tempName;
  }
}

//instance of class above
$myObj = new Person("Meeeegan", "SHeeeep", 1990);

// -> object operator
// :: scope resolution operator

$myObj->firstName = "SUPERLADY";
$myObj->firstName; //accessing properties in classes and changing values

$myObj::AVG_LIFE_SPAN; //accessing constants
Person::AVG_LIFE_SPAN;

// functions inside a class are called methods, as in JS

// $myObj->setFirstName("Suzanna");
echo $myObj->firstName;

// inheritance allows one class to inherit the methods and properties of another
// STATIC PROPERTIES AND METHODS

class Author extends Person
{
  public static $century = "19th";
  public static function getCentury()
  {
    //MUST BE SELF-CONTAINED
    return self::$century;
  }

}

echo Author::getCentury();


//can separate classes out into files (pretend I did that, but I'm not really going to. This would be at the top of the file)
include 'Person.php';
include_once 'Author.php'; // can limit to one instance, nice to use for functions and classes
//include will throw an error if you try to include a file that is not found - then it will continue executing the rest of the code

//can also include a file with require. If file is not found, the error will terminate script at the point it failed
require 'Person.php';
require_once 'Author.php';