<?php

use App\Core\App;
//call key config, find config array. Store it within container, associating within key called config. 
App::bind('config', require('config.php'));

App::bind('database', new QueryBuilder(
  Connection::make(App::get('config')['database'])
));

function view($name, $data = [])
{
  extract($data);
  return require "app/views/{$name}.view.php";
}

function redirect($path)
{
  header("Location: /{$path}");
}
