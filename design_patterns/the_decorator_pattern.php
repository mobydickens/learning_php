<?php

interface CarService {
  public function getCost();
  public function getDescription();
}


class BasicInspection implements CarService {
  public function getCost()
  {
    return 19;
  }
  public function getDescription()
  {
    return 'Basic Inspection';
  }
}

class OilChange implements CarService {
  protected $carService;

  public function __construct(CarService $carService) {
    $this->carService = $carService;
  }
  public function getCost()
  {
    return 10 + $this->carService->getCost();
  }
  public function getDescription()
  {
    return $this->carService->getDescription() . ', and an oil change.';
  }
}

class TireRotation implements CarService {
  protected $carService;
  public function __construct(CarService $carService) {
    $this->carService = $carService;
  }
  public function getCost()
  { 
    return 50 + $this->carService->getCost();
  }
  public function getDescription()
  {
    return $this->carService->getDescription() . ', and a tire rotation';
  }
}


//new oil change would be the decorator. 
//decorator MUST ACCEPT implementation in constructor
//awesome because you can build up objects at run-time and have them be as dynamic as you need

$service = new TireRotation(new OilChange(new BasicInspection));
echo $service->getDescription();

