<?php
use Core\Services\StaticBar;
use Core\Services\StaticFoo;

function runStatic()
{
    echo StaticFoo::$myStatic . '<br>';

    $foo = new StaticFoo;

    echo $foo->printStaticFoo() . '<br>';
    echo $foo->myStatic . '<br>';

    echo $foo::$myStatic . '<br>';

    $className = StaticFoo::class;
    echo $className::$myStatic . '<br>';

    echo StaticBar::$myStatic . "<br>";

    $bar = new StaticBar;
    echo $bar->printStaticFoo() . '<br>';

}

runStatic();