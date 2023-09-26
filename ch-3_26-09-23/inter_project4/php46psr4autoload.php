<?php
require_once "vendor/autoload.php";

use app\control\Hack;
use app\middleware\Filter;
use app\Best;
use app\Home;
use hum\Hum;

class Index
{
    public function __construct()
    {
        $home = new Home();
        $home->sayHomeName();

        $home = new Best();
        $home->sayBestName();

        $home = new Filter();
        $home->sayFilterName();

        $home = new Hack();
        $home->sayHack();

        $home = new Hum();
        $home->sayHum();
    }
}
$ind = new Index();
