<?php

//controllers are entry points for routes. 
$router->define([
  '' => 'controllers/index.php',
  'about' => 'controllers/about.php',
  'about/culture' => 'controllers/about-culture.php',
  'contact' => 'controllers/contact.php'
]);