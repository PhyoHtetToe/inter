<?php

class Index
{
    public function __call($method, $values)
    {
        echo "U r trying to call method {$method} with values of <hr>";
        echo "<pre>" . print_r($values) . "</pre>";
    }

    public static function __callStatic($name, $arguments)
    {
        echo "U r trying to call static method {$name} with parameter of <hr> ";
        echo "<pre>" . print_r($arguments, true) . "</pre>";
    }
}
// $obj = new Index();
// $obj->hey("mgmg", "sg sg");


Index::hey("mgmg", "JJ");#static method ko callstatic ntt pl tone lo ya 
