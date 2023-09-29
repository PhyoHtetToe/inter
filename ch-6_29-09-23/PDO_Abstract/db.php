<?php
require_once "dal.php";
class db extends dal
{
    public function __construct($db_host, $db_name, $db_user, $db_pass)
    {
        parent::__construct($db_host, $db_name, $db_user, $db_pass);
    }
    public function dbConn()
    {
        if ($this->db == null)
            $this->db = new PDO("mysql:host=" . $this->db_host . ";dbname=" . $this->db_name, $this->db_user, $this->db_pass);
        return $this->db;
    }
    public function disConn()
    {

        if ($this->db != null)
            $this->db = null;
    }
    public function fetchData($tt, $modifier)
    {
        $stmt = $this->db->prepare("SELECT * FROM shops WHERE id=:id");
        $stmt->bindParam("id", $modifier);
        $result = $stmt->execute();
        if ($result) {
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        } else
            return null;
    }
}
$db = new db("localhost", "restaurant", "root", "");
$db->dbConn();

$data = $db->fetchData("shops", 1);
if ($data != null)
    echo $data[0]->name;
else

    echo "error";
