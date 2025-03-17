<?php
require_once 'Animal.php';

class Cat extends Animal {
    public function meow() {
        print("{$this -> name} говорит: Мяу-мяу!<br>");
    }
}
