<?php
require_once 'Animal.php';

class Dog extends Animal {
    public function makeSound() {
        print("{$this->getName()} говорит: Гав-гав!<br>");
    }
}
