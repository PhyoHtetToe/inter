<?php

class php5thisobj
{
    public $name = "Kuro";
    private $age = 19;
    public function chgName()
    {
        $this->name = "kai";
    }
}
$obj = new php5thisobj();
$obj->chgName(); #chgname function ko use htrr lo kai pyit trr name ka
echo $obj->name . "<hr>";

$bb = new php5thisobj();
echo $bb->name;
