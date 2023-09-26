<?php
require_once "Autoload/loader.php";
class Index
{
    public function __construct()
    {
        Loader::load('Helper');

        $helper = new Helper("Helper");
        $helper->sayYourName();

        Loader::load('Hello/hello');
        $hello = new Hello();
        $hello->sayHello();

        Loader::load('Hello/Xal/xal');
        $xal = new Xal();
        $xal->sayXal();
    }
}
$ind = new Index();
