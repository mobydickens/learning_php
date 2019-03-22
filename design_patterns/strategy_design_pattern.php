<?php

//strategy pattern defines a family of algorithms, encapsulates each one, and then makes them interchangeable. 

// 1. define a family of algorithms (a family or a task that can be executed in multiple ways)

class LogToFile {

}

class LogToDatabase {

}

class LogToWebService {

}

// 2. encapsulate and make each one of the algorithms interchangeable

// CODE TO AN INTERFACE to allow them to be interchangeable
interface Logger {
  //contract
  public function log($data);
}

// ------------------------------------------->


interface Logger {
  //contract
  public function log($data);
}

class LogToFile implements Logger {
  public function log($data)
  {
    var_dump('log to file')
  }
}

class LogToDatabase implements Logger {
  public function log($data)
  {
    var_dump('log to db')
  }
}

class LogToWebService implements Logger {
  public function log($data)
  {
    var_dump('log to ws')
  }
}


// -----------------------------------

// specify you need to use SOME KIND of logger. The class doesn't care which, it just cares that you CAN

class App {
  public function log($data, Logger $logger)
  {
    $logger->log($data);
  }
}

$app = new App;
$app->log('some info here', new LogToWebService);