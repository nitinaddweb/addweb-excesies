<?php

interface Animal
{
    public function make_Sound();
}

interface human
{
    public function make_Sound();
}



interface bird extends Animal, human
{
    public function make_Sound();
}


class Cat implements Animal
{
    public function make_Sound()
    {
        echo " Meow Meow Meow";
    }
}

class Dog implements Animal
{
    public function make_Sound()
    {
        echo " Bow Bow Bow";
    }
}





$cat = new Cat();
$dog = new Dog();

echo $cat->make_Sound() . "<br>";
echo $dog->make_Sound();
