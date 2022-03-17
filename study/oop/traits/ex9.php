<?php

/**
 * Trait còn có thể định nghĩa cả property (nhưng chắc ít ai dùng)
 */
trait PropertiesTrait {
    public $x = 1;
}

class PropertiesExample {
    use PropertiesTrait;
}

$example = new PropertiesExample;
$example->x;