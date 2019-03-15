<?php

// Messages: how objects communicate with each other

// building up a suite of classes that interact with each other through various messages

class Person {
  
  protected $name;
  
  public function __construct($name)
  {
    $this->name = $name;  
  }
}

class Business {
  
  protected $staff;
  
  public function __construct(Staff $staff)
  {
    $this->staff = $staff;
  }
  
  // Typenting
  public function hire(Person $person)
  {
    $this->staff->add($person);
  }

  public function getStaffMembers()
  {
    return $this->staff->members();
  }
}

class Staff {
  
  protected $members = [];

  public function __construct($members = [])
  {
    $this->members = $members;
  }

  public function add(Person $person)
  {
    $this->members[] = $person;
  }

  public function members()
  {
    return $this->members;
  }
}

$megan = new Person("Meg Shep");
$staff = new Staff([$megan]);
// Dependencies - business depends upon a staff in order to run
$laracasts = new Business($staff);
$laracasts->hire(new Person('Jane'));

var_dump($laracasts->getStaffMembers());
// try to code in a way that makes comments redundant ;)