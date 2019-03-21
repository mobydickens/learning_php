<?php
// The Finder Component
// composer require symfony/finder - in bash 

require('vendor/autoload.php'); //would need to require to use 'dump'

use Symfony\Component\Finder\Finder;

Route::get('/', function() {
  $files = Finder::create()
    ->in(app_path())
    ->name('*.txt')
    ->contains('{example-key}');

  foreach( $files as $file ) {
    $contents = File::get($file->getRealPath());
    $updated = str_replace('{examplekey}', 'UPDATED!!', $contents);

    File::put($file->getRealPath(), $updated);
  }
});

// the VarDumper
// composer require symfony/var-dumper
class Tasks
{
  protected $tasks;
  public function __construct($tasks)
  {
    $this->tasks = $tasks;
  }
}

class Task
{
  public $description;
  public function __construct($description)
  {
    $this->description = $description;
  }
}

$tasks = new Task([
  new Task("go to the store"),
  new Task("go to the library"),
  new Task("go to the pet store"),
  new Task("go to the other place"),
  new Task("go to the place place")
]);

// the normal way:
var_dump($tasks);
// formats the dump prettily
dump($tasks);

