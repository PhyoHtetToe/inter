<?php

namespace App;

class Member
{
    private $isAuth = false;
    private $detailInfo = [
        "name" => "JJ",
        "age" => 20,
        "school" => "JP"
    ];
    public function getDetailinfo()
    {
        return $this->detailInfo;
    }
    public function setAuth($bol): void
    {
        $this->isAuth = $bol;
    }
    public function getAuth()
    {
        return $this->isAuth;
    }
}
