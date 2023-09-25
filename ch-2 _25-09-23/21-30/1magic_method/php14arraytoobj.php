<?php

$ary = ["One" => 1, "Two" => 2, "Three" => 3, "four" => 4];

$obj = (object) $ary;

var_dump($obj);
echo "<hr>" . $obj->One;
