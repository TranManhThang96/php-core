<?php
/*
 * spl_autoload_resgister function registers any number of autoloaders,
 * enabling for classes and interfaces to be automatically loaded if they are currently not defined
 */

spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

$obj  = new MyClass1();
$obj2 = new MyClass2();