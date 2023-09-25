<?php
#is_int
#is_bool
#is_string
#is_float
class Index
{
    public function showRes($num)
    {
        if (is_null($num)) {
            echo "You Passing argument is Integer!<br>";
        } else {
            die("We need Interger Null type Veriable");
        }
    }
}
$ind = new Index();
$ind->showRes(null);
