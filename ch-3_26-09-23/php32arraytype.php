<?php

class Test
{
}
class Index
{
    public function showRes(Test $num)
    {
        var_dump($num);
    }
}
$t = new Test();
$ind = new Index();
$ind->showRes($t);
