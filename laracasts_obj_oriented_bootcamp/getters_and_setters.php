<?php
// PART 2
// AND part 3, ENCAPSULATION


// PRIVATE - this method may only be accessed from within THIS switch class. Not accessible with extending. 

// PROTECTED - mostly the same as private. However, we can EXTEND this class. It means if he extends the class, he can still access the methods from that subclass. 

class Person {

  private $name;
  private $age;

  public function __construct($name)
  {
    $this->name = $name;
  }

  // there could be behavior with setting a particular property
  // when you use properties directly, you have no way to hook in and attach that behavior
  
  public function setAge($age)
  {
    if ($age < 21) 
    {
      throw new Exception("person is not old enough to do anything");
    }
     
    $this->age = $age;
  }

  // again, if you want behavior with getting. 

  public function getAge()
  {
    return $this->age * 365;
  }

}

$john = new Person('John Doe');
// using the public method allows us to access the private variables
$john->setAge(30);

var_dump($john);