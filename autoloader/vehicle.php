<?php

abstract class Vehicle {
  protected $color;

  public function __construct($color) {
    $this->color = $color;
  }

  abstract public function getInfo();
}