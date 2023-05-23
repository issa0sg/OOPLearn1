<?php

include_once "Interfaces/Sound.php";
include_once "Interfaces/Runnable.php";
include_once "Interfaces/Fly.php";

abstract class Animal{

    public static function doSomeThingAnimal()
    {
        echo (static::who() . " нассал насрал и ушел");
    }

    public static function who()
    {
        return __CLASS__;
    }
    
    protected $name;

    public function __construct(string $name) {
        $this->name = $name;
    }

    abstract function doSomeThingNice();

    public function getName()
    {
        return $name;
    }

}