<?php

// static *think* share
// Using static methods is generally not a good practice

class Math {

  public static function add(...$nums)
  {
    return array_sum($nums);
  }
}

// $math = new Math;
// var_dump($math->add(1,2,3));

// can write it like this if the method is STATIC:
  // has become a GLOBAL function, can be used anywhere without requiring a specific instance
// echo Math::add(1,2,3);


class Person {
  // properties should ideally NOT be static, but they CAN be
  public static $age = 1;
  public function haveBirthday()
  {
    static::$age++;
  }
}

Person::$age;

$me = new Person;
$me->haveBirthday();

echo Person::$age;

// MOST OF THE TIME, statics are not the right choice. 


// CONSTANTS
class BankAccount {
  // if under no circumstances the value should not change, you would want to use a constant. Tradition is to make them Uppercase
  const TAX = .09;
}

echo BankAccount::TAX;
