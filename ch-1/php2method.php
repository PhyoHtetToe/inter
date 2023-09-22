<?php

class php2method
{
    var $name = "Kuro";
    var $age = 19;
    public function hey($name)
    {
        echo "Hi I am Hey method " . $name;
    }
}
$obj = new php2method();
echo $obj->name . "<br>";
echo $obj->age . "<br>";
echo $obj->hey("Kuro") . "<br>";
