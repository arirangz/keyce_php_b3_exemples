<?php

abstract class Animal 
{
    public abstract function makeSound();
}

// Erreur car on a pas ajouté la méthode makeSoud()
class Dog extends Animal 
{

}
class Cat extends Animal 
{
    public function makeSound() {
        echo "Le chat miaule";
    }
}


$dog1 = new Dog();