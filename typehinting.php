<?php
class Animal {
    protected $name;
 
    public function __construct($name) {
       $this->name = $name;
    }
 
    public function getName() {
       return $this->name;
    }
 }
 
 class Zoo {
    protected $animals;
 
    public function __construct(array $animals) {
       $this->animals = $animals;
    }
 
    public function addAnimal($animal) {
       $this->animals[] = $animal;
    }
 
    public function getAnimals() {
       return $this->animals;
    }
 }
 
$dog = new Animal('Buddy');
$cat = new Animal('Whiskers');
$zoo = new Zoo([$dog]);
$zoo->addAnimal('boar');
print_r($zoo);

