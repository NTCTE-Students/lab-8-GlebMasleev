<?php
require_once 'Animal.php';
require_once 'Actions.php';

class Cat extends Animal implements Actions {
    public function makeSound() {
        print("{$this->getName()} говорит: Мяу-мяу!<br>");
    }

    public function run() {
        print("{$this->getName()} крадётся.<br>");
    }

    public function sleep() {
        print("{$this->getName()} спит.<br>");
    }
}
