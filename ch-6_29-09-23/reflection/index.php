<?php
require_once("Member.php");
#Reflection Class
$member = new App\Member();

$rc = new ReflectionClass('App\Member');

echo $rc->getName() . "<br>";
echo $rc->getShortName() . "<br>";
echo $rc->getNamespaceName() . "<br>";
echo $rc->hasMethod('getDetailinfo');
echo "<hr>";
showData(get_class_methods($rc));
function showData($ary)
{
    echo '<pre>' . print_r($ary, true) . "<pre>";
}
