<?php

include_once "Classes/Abstract/Animal.php";

class Bird extends Animal implements Sound//, Fly
{

    protected int $wingSize;

    public function __construct($name, $wingSize) {
        parent::__construct($name);
        $this->wingSize = $wingSize;
    }

    public function getWing()
    {
        return $wingSize;
    }

    public function makeSound()
    {
        echo $this->name." chirick chirick!";
    }

    public function doFly()
    {
        echo $this->name." i believe i can fly!";
    }

    public function doSomeThingNice()
    {
        echo $this->name." show wings ".$this->wingSize;
    }

}