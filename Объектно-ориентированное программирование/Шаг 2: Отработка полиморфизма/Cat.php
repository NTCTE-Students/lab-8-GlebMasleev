<?php
require_once 'Animal.php';

class Cat extends Animal {
    public function makeSound() {
        print("{$this -> name} говорит: Мяу-мяу!<br>");
    }
}
