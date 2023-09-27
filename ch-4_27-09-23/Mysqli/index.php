<?php

use app\database\dbgen;

require_once "vendor/autoload.php";
class index
{
    private $db;
    public function __construct()
    {
        $shops = [
            ["Apple", "192.168.0.104", "apple", "123", "1"],
            ["Microsoft", "192.168.0.105", "microsoft", "123", "1"],
            ["Oppo", "192.168.0.106", "oppo", "123", "1"],
            ["Vivo", "192.168.0.107", "vivo", "123", "1"],
            ["Redmi", "192.168.0.108", "redmi", "123", "1"]
        ];
        $this->db = new dbgen();
        $this->db->fetchAllShops(1);
    }
}
new index;
