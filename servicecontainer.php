<?php
// Define a class that needs a dependency
class Foo {
    protected $bar;
    public function __construct(Bar $bar) {
        $this->bar = $bar;
    }
    public function doSomething() {
        // Use the dependency
        $this->bar->doSomethingElse();
    }
}

// Register the dependency with the container
app()->bind(Bar::class, function () {
    return new Bar();
});

// Resolve the class from the container
$foo = app()->make(Foo::class);

// Use the class
$foo->doSomething();