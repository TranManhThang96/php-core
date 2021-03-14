<?php
class Foo {
    public const BAR = 'bar';
    private const BAZ = 'baz';
    public function show()
    {
        echo self::BAZ;
    }
}
echo Foo::BAR, PHP_EOL;  //bar
echo Foo::BAZ, PHP_EOL;  //Fatal error: Uncaught Error: Cannot access private const Foo::BAZ in …
