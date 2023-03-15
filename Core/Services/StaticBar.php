<?php

namespace Core\Services;

use Core\Services\StaticFoo;

class StaticBar extends StaticFoo
{
    function printStaticBar()
    {
        return parent::printStatic();
    }
}