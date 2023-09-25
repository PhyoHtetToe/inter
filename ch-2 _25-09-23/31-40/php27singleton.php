<?php

class Index
{
    private static $name = "Kuro";
    private static $instance;

    private function __construct()
    {
        self::$name = "Kenta";
    }
    public static function getTnstance()
    {
        if (self::$instance == null) {
            self::$instance = new Index();
        }
        return self::$instance;
    }
    public function getName()
    {
        return self::$name;
    }
}
$ind = Index::getTnstance();
echo $ind->getName();
