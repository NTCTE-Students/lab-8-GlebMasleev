<?php
class Animal {
    public $name;
    public $age;

    public function describe() {
        print("Это {$this -> name}, ему {$this -> age} лет.<br>");
    }
}
