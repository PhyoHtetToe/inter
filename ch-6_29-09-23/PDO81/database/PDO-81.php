<?php
require_once "dal.php";
class index
{
    public function __construct()
    {
        $dal = new dal();
        $shops = [
            ["Samsung", "192.168.0.110", "samsung", "123", "1"],
            ["Intel", "192.168.0.111", "intel", "123", "1"],
            ["Suzuki", "192.168.0.112", "suzuki", "123", "1"],
            ["Hashirama", "192.168.0.113", "hashirama", "123", "1"],
            ["Tobi", "192.168.0.114", "tobi", "123", "1"]
        ];
        $dal->joinData(1);
    }
}
new index;
