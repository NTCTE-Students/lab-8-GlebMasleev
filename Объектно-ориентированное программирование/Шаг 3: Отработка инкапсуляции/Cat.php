<?php
require_once 'Animal.php';

class Cat extends Animal {
    public function makeSound() {
        print("{$this->getName()} говорит: Мяу-мяу!<br>");
    }
}
