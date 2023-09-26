<?php

function doIt(...$var)
{
    echo $var[0] ?? "There is no freaking value";
}

doIt();
