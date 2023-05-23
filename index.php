<?php

include_once "Classes/Default/Dog.php";
include_once "Classes/Default/Bird.php";


$dog1 = new Dog("Rex",10);
$dog1->makeSound();
echo '<br>';

$bird1 = new Bird("Shaltai",20);
$bird1->makeSound();
echo '<br>';

function beAnimal(Sound $animal)
{
    $animal->makeSound();
    echo " ";
    $animal->doSomeThingNice();
    echo '<br>';
}

beAnimal($dog1);
beAnimal($bird1);
