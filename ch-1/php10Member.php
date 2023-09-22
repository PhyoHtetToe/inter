<?php

class php9Member
{
    var $name = "Kuro";
    var $age = 20;
    var $subject = "PHP";
    public function friendCount()
    {
        echo "iam fri count method";
    }
}

class goldMember extends php9Member
{
}
$obj = new goldMember();
$obj->friendCount();

class diamondMember extends php9Member
{
}
$obj = new diamondMember();
$obj->friendCount();
