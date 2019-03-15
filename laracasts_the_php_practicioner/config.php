<?php

// configure to make app safer
return [
  'database' => [
    'name' => '',
    'username' => '',
    'password' => '',
    'connection' => '',
    'options' => [
      //error handling
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]
  ]
];