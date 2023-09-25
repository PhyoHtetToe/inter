<?php

$ary = [
    ["One", "Two", "Three", "four"],
    ["One", "Two", "Three", "four"],
    ["One", "Two", "Three", "four"],
    ["One", "Two", "Three", "four"],
    ["One", "Two", "Three", "four"],
    ["One", "Two", "Three", "four"]
];
$data = serialize($ary);
echo $data;
$normal = unserialize($data);
echo "<pre>" . print_r($normal, true) . "</pre>";
