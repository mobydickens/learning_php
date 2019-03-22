<?php

// An adapter allows you to translate or convert one interface with another

// creating a class to allow TWO DIFFERENT interfaces to communicate

interface BookInterface {
  public function open();
  public function turnPage();
}

interface eReaderInterface {
  public function turnOn();
  public function pressNextPage();
}

//needs to implement the interface we are trying to adhere to
class eReaderAdapter implements BookInterface {

  private $reader;

  // inject the class
  public function __construct(reader $reader) {
    $this->reader = $reader;
  }

  public function open()
  {
    //mapping open OVER to the reader TURNON
    return $this->reader->turnOn();
  }
  public function turnPage()
  {
    return $this->reader->pressNextPage();
  }
}

class Book {
  public function open()
  {
    var_dump('opening the paper book');
  }
  public function turnPage()
  {
    var_dump('turning the page of the paper book');
  }
}


class Kindle {
  public function turnOn(eReaderInterface $kindle)
  {
    var_dump('opening the kindle');
  }
  public function pressNextPage()
  {
    var_dump('turning the page of the kindle book');
  }
}


class Person {
  public function read(BookInterface $book)
  {
    $book->open();
    $book->turnPage();
  }
}

(new Person)->read(new eReaderAdapter(new Kindle));