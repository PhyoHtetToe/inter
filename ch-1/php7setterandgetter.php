<?php

class php7setterandgetter
{
    private $name = "Kuro";
    private $age = 19;
    public function setter($data)
    {
        $this->name = $data;
    }
    public function getter()
    {
        return $this->name;
    }
}
$obj = new php7setterandgetter();
$obj->setter("Kenta");
echo $obj->getter();
