<?php

interface sheInter
{
    public function setWeapon($weapon);
}

class Index implements sheInter
{
    private $weapon;
    public function setWeapon($weapon)
    {
        $this->weapon = $weapon;
    }
    public function killNow()
    {
        echo "Killing with " . $this->weapon;
    }
}
$game = new Index();
$game->setWeapon("Gun");
$game->killNow();
