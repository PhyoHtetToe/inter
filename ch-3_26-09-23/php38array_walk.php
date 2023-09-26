<?php
$num = 20;
$ary = ["1" => "One", "2" => "Two", "3" => "Three"];

$jj = function ($values, $key) use (&$num) {
    $num = ++$num;
    echo "key is" . $key . "Values is " . $values . " Current Val is {$num} <hr>";
};
array_walk($ary, $jj);
