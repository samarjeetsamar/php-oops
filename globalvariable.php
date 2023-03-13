<?php
$foo = 10;

function myFunction() {
    global $foo;
    $foo = $foo + 5;
    echo $foo;
}

myFunction(); // outputs 15