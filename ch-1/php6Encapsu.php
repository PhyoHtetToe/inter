<?php

class php6Encapsu
{
    private $name = "Kuro";
    private $age = 19;
    public function forAge()
    {
        return $this->age;
    }
}
$obj = new php6Encapsu();
echo $obj->forAge();
