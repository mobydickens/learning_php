<?php

//refactoring - cleaning up without changing behavior

require 'core/bootstrap.php'; //responsible for doing some connection work

require Router::load('routes.php')
  ->direct(Request::uri(), Request::method());


   