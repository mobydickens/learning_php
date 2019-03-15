<?php

class QueryBuilder
{
  // pdo delegates to connection class
  protected $pdo;
  public function __construct($pdo)
  {
    $this->pdo = $pdo;
  }
  
  public function selectAll($table)
  {
    $statement = $this->pdo->prepare("select * from {$table}");
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_CLASS);
  }


  public function insert($table, $parameters)
  {

    //declare string with placeholders
    $sql = sprintf(
      'insert into %s (%s) values (%s)',
      $table,
      implode(', ', array_keys($parameters)),
      ':' . implode(', :', array_keys($parameters))
    );
    
    try {
      $statement = $this->pdo->prepare($sql);
      $statement->execute($parameters);
    } catch(Exception $e) {
      die("Whoops, something went wrong");
    }
  }

};