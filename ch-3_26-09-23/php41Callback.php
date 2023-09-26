<?php

// class Index
// {
//     public function doIt($fn)
//     {
//         $i = 0;
//         $sum = 0;
//         while ($i < 1000) {
//             $sum += $i;
//             $i++;
//         }
//         $this->finish($sum);
//     }
//     public function finish($tt)
//     {
//         echo "res is{$tt}";
//     }
// }
// $ind = new Index();
// $ind->doIt("finish");

class Index
{
    public function doIt($fn)
    {
        $i = 0;
        $sum = 0;
        while ($i < 1000) {
            $sum += $i;
            $i++;
        }
        $this->$fn($sum);
    }
    public function finish($tt)
    {
        echo "res is{$tt}";
    }
    public function kk()
    {
        echo "Don't touch";
    }
}
$ind = new Index();
$ind->doIt("kk");
