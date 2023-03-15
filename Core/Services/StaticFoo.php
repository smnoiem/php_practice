<?php

namespace Core\Services;

class StaticFoo
{
    public static $myStatic = "static_value";

    function printStaticFoo()
    {
        return self::$myStatic;
    }
}
