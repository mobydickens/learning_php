<?php

//useful when worried about code duplication
//extract reusable bits to abstract class
//general work flow contained in ONE place

abstract class Sub {

  public function make()
  {
    return $this 
      ->layBread()
      ->addLettuce()
      ->addPrimaryToppings()
      ->addSauces();
  }
  protected function layBread()
  {
    var_dump('Laying down the bread');
    return $this;
  }
  protected function addLettuce()
  {
    var_dump('Laying down the lettuce');
    return $this;
  }
  protected function addSauces()
  {
    var_dump('Laying down the sauce');
    return $this;
  }
  //this means this method is REQUIRED in the subclasses
  protected abstract function addPrimaryToppings();
}

class TurkeySub extends Sub {

  public function addPrimaryToppings()
  {
    var_dump('Laying down the turk');
    return $this;
  }

}

class VeggieSub extends Sub {

  public function addPrimaryToppings()
  {
    var_dump('Laying down the vegs');
    return $this;
  }
}

var_dump((new TurkeySub)->make());