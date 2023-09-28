<?php
require_once "database/dal.php";
class index
{
    public function __construct()
    {
        $dal = new dal();
        $dal->singleShopInsert("Nokia", "192.168.0.109", "nokia", "123", "1");
    }
}
new index;
