<?php


// public: outside of this class, anyone can access this property

// Think of class as a blueprint. You can have multiple different instances with a slightly different makeup. Think of a house blueprint, but each house has a different colored door. 


class Task {
  // PROPERTY:
  public $description;
  public $completed = false;
  // METHOD
  // Construct is a special method automatically fired when a new instance is created
  public function __construct($title, $description)
  {
    //this is a way of referring to THIS OBJECT, or THIS INSTANCE of our class
    // assigning the passed in parameter to description
    $this->description = $description;
    $this->title = $title;
  }
  public function complete()
  {
    $this->completed = true;
  }

}

// we create new instances of classes to access property values
// instances are referred to as objects
$task = new Task('Learn Object Oriented Programming', 'Do it!');
$task2 = new Task('Be amazing!!!', 'Do it!!!');

$task->complete();

// if you want to access the description property, you can say: 
var_dump($task->completed);

