<?php

use Core\Services\Service1;
use Core\Services\Service2;

function run()
{
    $service2 = new Service2();

    echo $service2->printAll2();
    echo $service2->printAll();
}

run();