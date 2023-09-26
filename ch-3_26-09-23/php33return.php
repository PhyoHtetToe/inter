<?php

class Test
{
}
class Index
{
    public function showRes(int $num): string #pyit aung chg lite tr
    {
        return $num;
    }
}
$ind = new Index();
echo $ind->showRes("hello");
