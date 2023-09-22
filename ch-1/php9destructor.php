<?php

class php9destructor
{
    var $t = 0;
    public function __construct()
    {
        echo " I am Constructor and start working " . "<br>";
    }
    public function loopIt()
    {
        for ($i = 0; $i < 20000; $i++) {
            $this->t += $i;
        }
        echo "value is " . $this->t . "<br>";
    }
    public function __destruct()
    {
        echo "done";
    }
}
$obj = new php9destructor();
$obj->loopIt();
