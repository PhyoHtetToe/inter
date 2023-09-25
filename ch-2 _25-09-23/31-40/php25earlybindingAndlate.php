<?php

class One
{
    public function className()
    {
        return __CLASS__;
    }
    public function getClassName()
    {
        echo static::className(); #late binding
        // echo self::className();
    }
}
class Two extends One
{
    public function className()
    {
        return __CLASS__;
    }
}
$jj = new  One();
$jj->getClassName();
echo "<hr>";
$jj = new  Two();
$jj->getClassName();
