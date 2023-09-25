<?php

class Index
{
    public function __get($var)
    {
        echo "you r trying to get none exist property [$var] <hr>";
    }

    public function __set($var, $value)
    {
        echo "you r trying to set none exist property $var with [$value] <hr>";
    }
}

$obj = new Index();
$obj->name = "Kuro";
