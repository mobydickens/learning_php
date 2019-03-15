<?php

// abstract classes versus interfaces

// An interface can and will only define public methods
// an interface is a contract
interface Provider {
  public function authorize();
}

// the login function doesn't need to know WHAT provider we have
function login(Provider $provider)
{
  $provider->authorize();
}

// ABSTRACT CLASSES
// think of it as one that cannot be instantiated on its own
abstract class Providers {
  //this will never be instantiated. 
  // abstract methods can be protected, not just public like interfaces
  abstract protected function getAuthURL();
}

// only the subclass will be instantiated with inheritance
class FacebookProvider extends Providers {
  //each subclass gives us THEIR version of that logic
  protected function getAuthURL()
  {
    return '';
  }
}

// you need to weigh what is more appropriate for your cases