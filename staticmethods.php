<?php

class MyClass {


    public static $count = 0;

    public function preText(){
        return self::$count; // "<pre> hellow world ! </pre>";
    }

    public static function helloWorld(){
        return self::$count;
    }

}

//echo MyClass::preText();
echo MyClass::helloWorld();