<?php
use App\Core\Router;
use App\Core\Request;

//refactoring - cleaning up without changing behavior
require 'vendor/autoload.php';
require 'core/bootstrap.php'; //responsible for doing some connection work

Router::load('app/routes.php')
  ->direct(Request::uri(), Request::method());


    