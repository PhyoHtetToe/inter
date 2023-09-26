<?php

class Loader
{
    public static function load($classN)
    {
        require_once $classN . ".php";
    }
}
