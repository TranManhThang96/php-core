<?php
$thang = 'huyen';
$$thang = 'thangbeo';
echo $huyen;

define('MIN_VALUE', '0.0');   // RIGHT - Works OUTSIDE of a class definition.
define('MAX_VALUE', '1.0');   // RIGHT - Works OUTSIDE of a class definition.

//const MIN_VALUE = 0.0;         RIGHT - Works both INSIDE and OUTSIDE of a class definition.
//const MAX_VALUE = 1.0;         RIGHT - Works both INSIDE and OUTSIDE of a class definition.

class Constants
{
    //define('MIN_VALUE', '0.0');  WRONG - Works OUTSIDE of a class definition.
    //define('MAX_VALUE', '1.0');  WRONG - Works OUTSIDE of a class definition.
    define('HAHA', 'ko dùng được');
    const MIN_VALUE = 10.0;      // RIGHT - Works INSIDE of a class definition.
    const MAX_VALUE = 1.0;      // RIGHT - Works INSIDE of a class definition.

    public static function getMinValue()
    {
        echo self::MIN_VALUE;
        return self::MIN_VALUE;
    }

    public static function getMaxValue()
    {
        return self::MAX_VALUE;
    }
}

$con = new Constants();
$con->getMinValue();