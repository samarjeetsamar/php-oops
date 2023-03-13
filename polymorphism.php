<?php 
class Animal {
    public function makeSound() {
        echo "Animal is making a sound\n";
    }
}

class Dog extends Animal {
    public function makeSound() {
        echo "Dog is barking\n";
    }
}

class Cat extends Animal {
    public function makeSound() {
        echo "Cat is meowing\n";
    }
}

function makeAnimalSound(Animal $animal) {
    $animal->makeSound();
}

$animal1 = new Dog();
$animal2 = new Cat();

makeAnimalSound($animal1); // outputs "Dog is barking"
makeAnimalSound($animal2); // outputs "Cat is meowing"