<?php

class MyClass {
    private static $count = 0;

    public function __construct() {
        self::$count++;
    }

    public static function getCount() {
        return self::$count;
    }
}

// Create some objects
$obj1 = new MyClass();
$obj2 = new MyClass();
$obj3 = new MyClass();

// Call the static method
echo "Count: " . MyClass::getCount() . "<br>";