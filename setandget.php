<?php
class User {
    private $data = array();

    public function __get($name) {
        if (isset($this->data[$name])) {
            return $this->data[$name];
        }
        return null;
    }

    public function __set($name, $value) {
        $this->data[$name] = $value;
    }
}

$user = new User();
$user->name = "John Doe"; // This will call __set('name', 'John Doe')
echo $user->name; // This wi