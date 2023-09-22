<?php

class php3methodoverloading
{
    var $name = "Kuro";
    var $age = 19;
    public function doIt($d = 20)
    {
        echo "Hi I am " . $d;
    }
}
$obj = new php3methodoverloading();
$obj->doIt(40) . "<br>";#overload pay tl
