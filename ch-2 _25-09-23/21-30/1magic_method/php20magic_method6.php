<?php
class Index
{
    var $name = "mgmg";
    public function __toString()
    {
        return "This class have no properties or method <hr>";
    }
    public function __invoke()
    {
        return "Bla Bla";
    }
    public function __clone()
    {
        echo "cloning ";
    }
}
$obj = new Index();
// echo $obj;#tostring
// echo $obj();#invoke

$aa = clone $obj;
echo $aa->name;
