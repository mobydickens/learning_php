<?php

class Connection
{
  public static function make($config)
  {
    try
    {
      //connect is deprecated, do not use
      return new PDO(
        $config['connection'].';dbname='.$config['name'],
        $config['username'],
        $config['password'],
        $config['options']
      );
    }
    catch(PDOException $e)
    {
      die($e->getMessage());
    }
  }
}

// $pdo = Connection::make();