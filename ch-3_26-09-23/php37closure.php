<?php
// $num = 334;
// $var = function () use ($num) {
//     echo "i am closure {$num}";
// };
// $var();

$num = 20;
function doIt($var)
{
    $var();
}
doIt(function () use ($num) {
    echo $num;
});
