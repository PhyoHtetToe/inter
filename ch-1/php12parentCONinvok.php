<?php

class php12parentCONinvok
{
    var $name = "Kuro";
    var $age = 20;
    var $subject = "PHP";
    public function friendCount()
    {
        echo "iam fri count method";
    }

    public function __construct()
    {
        echo "Hi" . "<br>";
    }
}

class goldMember extends php12parentCONinvok
{
    public function friendCount()
    {
        $this->name = "Kenta";
        echo "GGWP" . $this->name;
    }

    public function __construct()
    {
        parent::__construct();
        echo "I am Hacker";
    }
}
$obj = new goldMember();
