<?php

//allows you to take business rule and promote it to a first class citizen. 

class CustomerIsGold {
  public function isSatisfiedBy(Customer $customer)
  {
    $customer->type == 'gold';
  }
}

$spec = new CustomerIsGold;

$spec->isSatisfiedBy(new Customer);

class Customer {
  protected $plan;
  public function __construct($plan) {
    $this->plan = $plan;
  }
}


// this may be the better option. Specification pattern above is NOT ALWAYS THE BEST CHOICE
class Customer {
  public function isGold()
  {
    return $this->type == 'gold';
  }
}