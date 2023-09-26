<?php
error_reporting(0);
function ErrorHandle()
{
    throw new Exception("Fail");
}
set_error_handler("ErrorHandle");

try {
    fopen('test.txt', 'r');
} catch (Exception $e) {
    echo $e->getMessage();
} finally {
    echo " <br> Ha Ha";
}
