<?php

class php11Override
{
    var $name = "Kuro";
    var $age = 20;
    var $subject = "PHP";
    public function friendCount()
    {
        echo "iam fri count method";
    }
}

class goldMember extends php11Override
{
    public function friendCount()
    {
        $this->name = "Kenta";
        echo "GGWP" . $this->name;
    }
}
$obj = new goldMember();
$obj->friendCount();
$obj->name;
