<?php

class Car extends Vehicle {
  private $model;

  public function __construct($color, $model) {
    parent::__construct($color);
    $this->model = $model;
  }

  public function getInfo() {
    return "This is a " . $this->color . " " . $this->model . " car.";
  }
}