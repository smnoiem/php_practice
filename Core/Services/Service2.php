<?php

namespace Core\Services;

class Service2 extends Service1
{
    public $public = 'Public2';
    protected $protected = 'Protected2';
    
    function printAll2()
    {
    	echo $this->public . ' <-- class2 <br>';
        echo $this->protected . ' <-- class2 <br>';
        echo $this->private . ' <-- class2 <br>';
    }
}
