<?php

class php8constructor
{
    public function __construct($dt1, $dt2, $dt3)
    {
        echo " The Result is " . (($dt1 + $dt2 + $dt3) / 2);
    }
}
new php8constructor(20, 30, 50);
