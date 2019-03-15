<?php

use Acme\Person;
use Acme\Business;
use Acme\Staff;

$megan = new Person("Meg Shep");
$staff = new Staff([$megan]);
// Dependencies - business depends upon a staff in order to run
$laracasts = new Business($staff);
$laracasts->hire(new Person('Jane'));

var_dump($laracasts->getStaffMembers());
// try to code in a way that makes comments redundant ;)