<?php

include_once "Classes/Abstract/Animal.php";

class Dog extends Animal implements Sound,Runnable
{
    
    protected int $tailSize;

    public function __construct(string $name,int $tailSize) {
        parent::__construct($name);
        $this->tailSize = $tailSize;
    }

    public function getTail()
    {
        return $this->tailSize;
    }

    public function makeSound()
    {
        echo $this->name." bark bark!";
    }

    public function doSomeThingNice()
    {
        echo $this->name." show tail ".$this->tailSize;
    }

    public function run()
    {
        echo $this->name." run!";
    }

}
