
<?php
require_once "ddgen.php";
class dal
{
    private $db;
    public function __construct()
    {
        $this->db = ddgen::getInstance()->getConn();
    }
    public function getSingleShop($id)
    {
        $stmt = $this->db->prepare("SELECT * FROM shops WHERE id=:id");
        $stmt->bindParam(":id", $id);
        $stmt->execute();

        $stmt->bindColumn("name", $name);
        $stmt->bindColumn("username", $username);
        $stmt->bindColumn("ipadd", $ipadd);
        $stmt->bindColumn("created_at", $created_at);
        $result = $stmt->fetchObject();

        echo $result->name . "<br>" . $result->username  . "<br>" . $result->ipadd . "<br>" . $result->created_at;
    }

    public function getAllshop($state)
    {
        $stmt = $this->db->prepare("SELECT * FROM shops WHERE state=:state");
        $stmt->bindParam(":state", $state);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_OBJ);
        foreach ($result as $item) {
            // echo $item['name'] . "<br>";
            // echo $item['ipadd'] . "<br>";
            // echo $item['created_at'] . "<br><hr>";
            echo $item->name . "<br>";
            echo $item->ipadd . "<br>";
            echo $item->created_at . "<br>";
            echo "<hr>";
        }
    }

    public function singleShopInsert($name, $ipadd, $username, $password, $state)
    {
        $dat = date("Y-m-d H:m:s");
        $stmt = $this->db->prepare("INSERT INTO shops (name, ipadd, username, password, state, created_at) VALUES (:name, :ipadd, :username, :password, :state, :created_at)");

        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':ipadd', $ipadd);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $password);
        $stmt->bindParam(':state', $state);
        $stmt->bindParam(':created_at', $dat);
        $result = $stmt->execute();
        $insertId = $this->db->lastInsertId();

        echo $result ? "Success" . $insertId : "Fail";
    }
}
