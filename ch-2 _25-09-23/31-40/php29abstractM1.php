<?php

abstract class paren
{
    const DB_HOST = "localhost";
    public $name = "Mg Mg";
    public abstract function myAbs();
    public function doIt()
    {
        echo "I am doing it now<hr>";
    }
}
class Index extends paren
{
    public function myAbs()
    {
        echo "I am abstract method originally";
    }
}
$ind = new Index;
$ind->myAbs();
