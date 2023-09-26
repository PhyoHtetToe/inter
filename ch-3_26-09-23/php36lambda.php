<?php

function doIt($para1, $para2, $para3)
{
    $tt = $para1 + $para2;
    $para3($tt);
}
$ss = function ($var) {
    echo "i am lambda{$var}";
};
doIt(3, 2, $ss);
