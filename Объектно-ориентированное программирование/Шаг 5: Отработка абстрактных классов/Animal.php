<?php
abstract class Animal {
    private $name;
    private $age;

    public function describe() {
        print("Это {$this->getName()}, ему {$this->getAge()} лет.<br>");
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getAge() {
        return $this->age;
    }

    public function setAge($age) {
        if ($age >= 0) {
            $this->age = $age;
        } else {
            print('Возраст не может быть отрицательным.<br>');
        }
    }

    abstract public function makeSound();
}
