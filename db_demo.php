<?php

$dbPassword = "";
$dbUsername = "";
$dbServer = "";
$dbName = "";


//creating a connection string in PHP
$connection = new mysqli($dbServer, $dbUsername, $dbPassword, $dbName);

if($connection->connect_erno)
{
  exit("Database connection failed. Reason: ".$connection->connect_error); 
}

// $query = "DELETE FROM butterflies WHERE id = 20";

//selecting and saving to object
$query = "SELECT name FROM butterflies ORDER BY name";
$resultObj = $connection->query($query);

if($resultObj->num_rows > 0)
{
  while($singleRow = $resultObj->fetch_assoc())
  {
    print_r($singleRow);
  }
}

// close connection
$resultObj->close();
$connection->close();

//after inserting a new line, can grab last inserted id by running: 
// echo "Newly created id: ".$connection->insert_id;