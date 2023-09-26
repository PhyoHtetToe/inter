<?php
require_once "vendor/autoload.php";
class Index
{
    public function __construct()
    {
        $start = new Start();
        $start->sayStartName();

        $home = new Home();
        $home->sayHomeName();

        $filter = new Filter();
        $filter->sayFilterName();

        $helperr = new Helperr();
        $helperr->sayHelperrName();
    }
}
$ind = new Index();
