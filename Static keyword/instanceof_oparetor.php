<?php
class Animal {}
class Dog extends Animal {}

$dog = new Dog();

if ($dog instanceof Dog) {
    echo "This is a Dog object.\n";
}

if ($dog instanceof Animal) {
    echo "This is also an Animal object.";
}
?>
