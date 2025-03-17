<?php
require_once 'Dog.php';
require_once 'Cat.php';

$dog = new Dog();
$dog->setName('Бобик');

$cat = new Cat();
$cat->setName('Мурка');

$animals = [$dog, $cat];

foreach ($animals as $animal) {
    $animal->run();
    $animal->sleep();
}
