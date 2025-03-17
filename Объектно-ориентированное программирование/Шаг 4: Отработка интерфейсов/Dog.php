<?php
require_once 'Animal.php';
require_once 'Actions.php';

class Dog extends Animal implements Actions {
    public function makeSound() {
        print("{$this->getName()} говорит: Гав-гав!<br>");
    }

    public function run() {
        print("{$this->getName()} бежит.<br>");
    }

    public function sleep() {
        print("{$this->getName()} спит.<br>");
    }
}
