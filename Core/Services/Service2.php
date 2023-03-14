<?php

namespace Core\Services;

class Service2 extends Service1
{
    public $public = 'Public2';
    protected $protected = 'Protected2';
    private $localPrivate = "Private2";

    public function __construct($value = null)
    {
        if($value) $this->localPrivate = $value;
    }
    
    function printAll2()
    {
    	echo $this->public . ' <-- class2 <br>';
        echo $this->protected . ' <-- class2 <br>';
        echo $this->private . ' <-- class2 <br>';
        echo $this->localPrivate . ' <-- class2 <br>';
    }

    function accessOtherObject(Service2 $other)
    {
        echo "--- in accessOtherObject() --- <br>";

        echo $other->localPrivate . ' <-- class2 <br>';
        $other->localPrivate = 'local changed from another object of same type';
        echo $other->localPrivate . ' <-- class2 <br>';
        $other->printAll2();

        echo "--- in accessOtherObject() ends ---<br>";
    }

    function getParentPrivateProperty()
    {
        echo $this->getPrivate() . ' <-- class2 <br>';
    }

    function runAllMethods2()
    {
        $this->runAllMethods(); //works

        $this->testPublic();
        $this->testProtected();
        // $this->testPrivate();   // fatal error
    }

    function printConstants()
    {
        echo self::PUBLIC  . ' <-- class2 <br>';
        echo self::PROTECTED  . ' <-- class2 <br>';
        // echo self::PRIVATE  . ' <-- class2 <br>';   // fatal error
    }
}
