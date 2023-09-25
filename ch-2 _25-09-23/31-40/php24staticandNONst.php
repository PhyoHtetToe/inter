<?php
#non static => can call static
#static => can't call non static
#static => can call static

class Index
{
    public static $count = 0;
    public static function showMe()
    {
        echo self::$count;
    }
    public  function doIt()
    {
        echo "Ha Ha";
    }
}
// echo Index::$count . "<br>";
$ind = new Index();
echo $ind->showMe();
