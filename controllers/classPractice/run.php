<?php

use Core\Services\Service1;
use Core\Services\Service2;

function run()
{
    $service1 = new Service1();
    $service2 = new Service2();

    echo $service2->printAll2();
    echo $service2->printAll();
    echo $service2->getParentPrivateProperty();

    $service2->runAllMethods();
    $service2->runAllMethods2();

    $service2->printConstants();

    $service2 = new Service2('New Local Private');
    $service2->printAll2();

    $service2->accessOtherObject(new Service2('Other Local Private'));
}

run();