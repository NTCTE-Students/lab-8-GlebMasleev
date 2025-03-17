<?php
require_once 'Dog.php';
require_once 'Cat.php';

$animals = [];
$dog = new Dog();
$dog->name = 'Бобик';
$dog->age = 3;
$animals[] = $dog;

$cat = new Cat();
$cat->name = 'Мурка';
$cat->age = 2;
$animals[] = $cat;

foreach ($animals as $animal) {
    $animal->describe();
    $animal->makeSound();
}
