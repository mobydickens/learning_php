<?php

// configure to make app safer
return [
  'database' => [
    'name' => 'mytestdb',
    'username' => 'root',
    'password' => 'password',
    'connection' => 'mysql:host=127.0.0.1',
    'options' => [
      //error handling
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]
  ]
];