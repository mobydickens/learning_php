<?php

// allows us to chain any number of objects, where each has the option of either handling a particular request, or deferring to the next object in the cycle

abstract class HomeChecker {

  protected $successor;

  public abstract function check(HomeStatus $home);
  public function succeedWith(HomeChecker $successor)
  {
    $this->successor = $successor;
  }
  public function next(HomeStatus $home)
  {
    if($this->successor)
    {
      $this->successor->check($home);
    }
  }
}

class Locks extends HomeChecker {
  public function check(HomeStatus $home)
  {
    if ( !$home->locked )
    {
      throw new Exception('Doors not locked!!!!!');
    }
    $this->next($home);
  }
}

class Lights extends HomeChecker {
  public function check(HomeStatus $home)
  {
    if (!$home->lightsOff )
    {
      throw new Exception('Lights are on!!!');
    }
    $this->next($home);
    }
}

class Alarm extends HomeChecker {
  public function check(HomeStatus $home)
  {
    if (!$home->alarmOn )
    {
      throw new Exception('alarm not on');
    }
    $this->next($home);
    }
}

class HomeStatus {
  public $alarmOn = true;
  public $locked = true;
  public $lightsOff = false;
}


// set up objects
$locks = new Locks;
$lights = new Lights;
$alarm = new Alarm;


//chain
$locks->succeedWith($lights);
$lights->succeedWith($alarm);

$locks->check(new HomeStatus);