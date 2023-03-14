<?php

namespace Core\Services;

class Service1
{
    public $public = 'Public';
    protected $protected = 'Protected';
    private $private = "Private";
    
    function printAll()
    {
    	echo $this->public . ' <-- class1 <br>';
        echo $this->protected . ' <-- class1 <br>';
        echo $this->private . ' <-- class1 <br>';
    }
}
