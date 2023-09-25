<?php

class One
{
    public static $name = "Kuro";
    public static function authoerName()
    {
        return static::$name;
    }
    public static function getAuthoerName()
    {
        echo static::authoerName();
    }
}
class Two extends One
{
    public static function authoerName()
    {
        return static::$name . "and Kenta";
    }
}
$jj = new  One();
$jj->getAuthoerName();
echo "<hr>";
$jj = new  Two();
$jj->getAuthoerName();
