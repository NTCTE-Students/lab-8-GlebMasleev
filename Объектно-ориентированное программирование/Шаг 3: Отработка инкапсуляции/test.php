<?php
require_once 'Dog.php';
require_once 'Cat.php';

$dog = new Dog();
$dog->setName('Бобик');
$dog->setAge(3);
$dog->describe();
$dog->makeSound();

$cat = new Cat();
$cat->setName('Мурка');
$cat->setAge(2);
$cat->describe();
$cat->makeSound();
