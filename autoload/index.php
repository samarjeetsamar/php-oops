<?php
require_once __DIR__ . '/vendor/autoload.php';

use App\MyClasses\anotherClass;
use App\MyClasses\MyClass;
use App\Classes\ClassList;

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

// use a function defined in example.php
foo();

// use a class defined in example.php
$bar = new Bar();
$bar->baz();

//call from anotherCass
$obj = new anotherClass();
echo $obj->mfromanother();

//call from MyClass
$obj2 = new MyClass();
echo $obj2->doSomething();

//call method from ClassList
$obj3 = new ClassList();
echo $obj3->getList();

//Call the helper function
echo myHelperFunction() . "\n";

//use of monolog package
$log = new Logger('name');
$log->pushHandler(new StreamHandler('./logger.log', Logger::WARNING));

// add records to the log
$log->warning('Foo');
$log->error('Bar');

