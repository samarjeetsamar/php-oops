<?php
class MyClass {
    private $name;

    public function setName($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }
}

$obj = new MyClass();
$obj->setName("John");
$obj2 = new MyClass();

echo $obj2->getName(); // outputs "John"