<?php

class Index
{
    // public function __isset($name)
    // {
    //     echo "Yor are trying to check the set of <span style ='color:red;'>{$name}</span> property <hr> ";
    // }
    public function __unset($name)
    {
        echo "Yor are trying to check the unset of <span style ='color:red;'>{$name}</span> property ";
    }
}

$obj = new Index();
// var_dump(isset($obj->name));
echo isset($obj->kk) ? "T" : "F";
isset($obj->a);
unset($obj->name);
