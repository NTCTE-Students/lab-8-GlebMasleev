<?php
require_once 'Animal.php';

class Dog extends Animal {
    public function bark() {
        print("{$this -> name} говорит: Гав-гав!<br>");
    }
}
