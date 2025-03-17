<?php
require_once 'Dog.php';
require_once 'Cat.php';

$dog = new Dog();
$dog->name = 'Бобик';
$dog->age = 3;
$dog->describe();
$dog->bark();

$cat = new Cat();
$cat->name = 'Мурка';
$cat->age = 2;
$cat->describe();
$cat->meow();
