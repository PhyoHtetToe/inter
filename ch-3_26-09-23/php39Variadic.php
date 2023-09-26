<?php

function doIt(...$var)
{
    echo $var[2][count($var[2]) - 1];
}

doIt(["One", "Two", "Three"], "HI", ["JJ", "MM", "BB", "sdfg", "ff", "fdgs"]);
