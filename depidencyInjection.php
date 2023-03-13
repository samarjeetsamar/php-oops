<?php
class Car {
    private $engine;
 
    public function __construct(Engine $engine) {
    	$this->engine = $engine;
    }
 
    public function start() {
    	$this->engine->turnOn();
    }
 }
 
 class Engine {
    public function turnOn() {
    	echo "Engine is turned on";
    }
 }
 
 //$engine = new Engine();
 $car = new Car(new Engine());
 $car->start();