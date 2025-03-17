<?php
require_once 'Dog.php';
require_once 'Cat.php';

$dog = new Dog();
$dog->setName('Бобик');
$dog->makeSound();

$cat = new Cat();
$cat->setName('Мурка');
$cat->makeSound();
