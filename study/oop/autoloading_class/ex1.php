<?php
/*
 * Many developers writing object-oriented applications create one PHP source file per class definition.
 * One of the biggest annoyances is having to write a long list of needed includes at the beginning of each script (one for each class).
 * spl_autoload_resgister function registers any number of autoloaders,
 * enabling for classes and interfaces to be automatically loaded if they are currently not defined
 */

spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

$obj  = new MyClass1();
$obj2 = new MyClass2();