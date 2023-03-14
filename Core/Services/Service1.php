<?php

namespace Core\Services;

class Service1
{
    public $public = 'Public';
    protected $protected = 'Protected';
    private $private = "Private";

    public const PUBLIC = 'Public const';
    protected const PROTECTED = 'Protected const';
    private const PRIVATE = "Private const";
    
    function printAll()
    {
    	echo $this->public . ' <-- class1 <br>';
        echo $this->protected . ' <-- class1 <br>';
        echo $this->private . ' <-- class1 <br>';
    }

    function getPrivate()
    {
        return $this->private;
    }

    public function testPublic()
    {
        echo 'Service1::testPublic() <br>';
    }

    protected function testProtected()
    {
        echo 'Service1::testProtected() <br>';
    }

    private function testPrivate()
    {
        echo 'Service1::testPrivate() <br>';
    }

    function runAllMethods()
    {
        $this->testPublic();
        $this->testProtected();
        $this->testPrivate();
    }
}
