<?php

class Horse
{
    static $props = ['order' => 'mammal'];
}

$animal = new Horse();
echo $animal::$props['order'];  //mammal


$animalClass = get_class($animal); // return horse
echo $animalClass::$props['order'];  //mammal