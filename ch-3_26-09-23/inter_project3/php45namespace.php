<?php
require_once "app/Home.php";
require_once "app/Best.php";
require_once "app/middleware/Filter.php";

use app\middleware\Filter;
use app\Best;
use app\Home;

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
    }
}
$ind = new Index();
