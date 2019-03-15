<?php

interface Animal {
  //think of an interface as a contract. No real logic, more abstract. Lays down terms for what any implimentation must adhere to.

  public function communicate();
}


// Dog must ADHERE to the contract with interface. PHP will force this to use the methods specified in Animal
class Dog implements Animal {
  public function communicate()
  {
    return 'bark';
  }
}
class Cat implements Animal {
  public function communicate()
  {
    return 'meow';
  }
}

// polymorphism
// strategy pattern
interface Logger {
  public function execute($message);
}

class LogToFile implements Logger {
  public function execute($message)
  {
    var_dump('Log the message to a file: '.$message);
  }
}
class LogToDB implements Logger {
  public function execute($message)
  {
    var_dump('Log the message to database: '.$message);
  }
}

class UsersController {

  protected $logger;

  // in order for me to work I need to have some functionality to log some data
  public function __construct(Logger $logger)
  {
    $this->logger = $logger;
  }

  public function show()
  {
    $user = "Jane Doe";
    $this->logger->execute($user);
  }
}

$controller = new UsersController(new LogToDb);
$controller->show();

// program to an interface, not to an implimentation/concretion
// if there are ever classes or tasks where you could imagine having multiple implimentations or methods for exectuting the task or behavior, that is a sign you need to create an interface. 


interface CastsToJson {
  public function toJson();
}

class User implements CastsToJson {}
class OtherUser implements CastsToJson {}

// another example
interface CanBeFiltered {
  public function filter();
}

class Favorited implements CanBeFiltered {
  public function filter()
  {
  }
}
class Unwatched implements CanBeFiltered {
  public function filter()
  {
    
  }
}
class Difficulty implements CanBeFiltered {
  public function filter()
  {
    
  }
}