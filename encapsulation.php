<?php 
//By encapsulating the methods within the class, we have controlled their access and ensured that they are used in a consistent and valid way. This allows us to maintain the integrity of the MyClass object and prevent unauthorized access or modification of its methods.


class MyClass {
    public function publicMethod() {
        // This method can be accessed from outside the class
    }
    
    private function privateMethod() {
        // This method can only be accessed from within the class
    }
    
    protected function protectedMethod() {
        // This method can only be accessed from within the class hierarchy
    }
}

$myObject = new MyClass();

// Call a public method
$myObject->publicMethod();

// Try to call a private method (will generate a fatal error)
$myObject->privateMethod();