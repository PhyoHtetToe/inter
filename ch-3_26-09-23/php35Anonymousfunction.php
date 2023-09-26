<?php

$jk = 190;
$var = function (&$jk, $pl_h) {
    // $jk = 77;
    echo "bla{$jk}{$pl_h}";
};
echo $jk . "<hr>";
$var($jk, "Boo");
echo "<hr>" . $jk;
