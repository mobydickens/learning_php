<?php

class Mother {
  public function getEyeCount()
  {
    return 2;
  }
}

// Child inherits methods from mother through inheritance
class Child extends Mother {

}

$sarah = new Child();
var_dump($sarah->getEyeCount());



// in laravel, they have models that leverage Eloquent

// class Post extends Eloquent {
  
// }


// Abstract classes cannot be abstantiated. They essentially will never be their own instance, but any SHAPE that is an instance will have all the properties in the parent. 
abstract class Shape {
  protected $color;
  public function __construct($color = 'blue')
  {
    $this->color = $color;
  }
  //getter function
  public function getColor()
  {
    return $this->color;
  }
  //we don't have to declare body for an abstract function because there will be no logic here. This is simply just saying, "All my subclasses MUST have getArea();". 
  abstract protected function getArea();
  //will there ever be any behavior/functionality that is shared between multiple shapes? If yes, use a parent class
}

class Square extends Shape {
  
  protected $length = 4;
  public function getArea()
  {
    return pow($this->length, 2);
  }
}

// when you use inheritance and need to change the behavior from a parent class, just OVERRIDE it!
class Triangle extends Shape {

  protected $height = 7;
  protected $base = 4;
   
  public function getArea()
  {
    return .5 * $this->base * $this->height;
  }
}

class Circle extends Shape {
  protected $radius = 5;
  public function getArea()
  {
    return M_PI * pow($this->radius, 2);
  }
}

// echo (new Square)->getArea();
// echo (new Triangle)->getArea();
// echo (new Circle)->getArea();

$newSquare = new Square('red');
echo $newSquare->getColor();
(new Circle)->getArea();

//abstracts are for just implimenting behavior
abstract class Mailer {
  public function send($to, $from, $body)
  {
  
  }
}

class UserMailer extends Mailer {
}

class AdminMailer extends Mailer {
  public function sendWelcomeEmail(User $user)
  {
    return $this->send($user->email);
  }
}


// if you find that you constantly want to inherit, it is possible you might be missing something, and should instead use composition. NEXT LESSON. 