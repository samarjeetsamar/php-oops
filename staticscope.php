<?php

class MyClass {
    private $count = 0;

    public function __construct() {
        $this->count++;
    }

    public static function getCount() {
        return $this->count;
    }
}

// Create some objects
$obj1 = new MyClass();
$obj2 = new MyClass();
$obj3 = new MyClass();

// Call the static method
echo "Count: " . MyClass::getCount() . "<br>";