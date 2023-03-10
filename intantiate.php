<?php

class ClassA extends \stdClass {
    public function runMethod(){
        echo 'method from class A';
    }
}
class ClassB extends \stdClass {
    public $hi = 'hi from classB';
}
class ClassC extends ClassB {}
class ClassD extends ClassA {}

function getSomeClass(): string
{
    return 'ClassA';
}

$objA = new (getSomeClass());
$objA->runMethod();
echo "<br/>";

//var_dump(new ('Class' . 'B'));
var_dump(new ('Class' . 'C'));
//var_dump(new (ClassD::class));

$objB = new ClassB;
echo $objB->hi;
?>