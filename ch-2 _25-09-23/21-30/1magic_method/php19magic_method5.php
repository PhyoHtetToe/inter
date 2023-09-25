<?php
class Index
{
    public function __sleep()
    {
        echo "u r trying to serialize my object!<hr>";
        return [];
    }
    public function __wakeup()
    {
        echo "u r trying to deserialize my object!<hr>";
        return [];
    }
}
$obj = new Index;
$ss = serialize($obj);
$uu = unserialize($ss);
echo "<pre>" . print_r($uu, true) . "</pre>";
