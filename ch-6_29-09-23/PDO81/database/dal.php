
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
    public function multipleShopInsert($shops)
    {
        $dat = date("Y-m-d H:m:s");
        $stmt = $this->db->prepare("INSERT INTO shops (name, ipadd, username, password, state, created_at) VALUES (
            :name, :ipadd, :username, :password, :state, :created_at
            )");
        foreach ($shops as $shop) {
            $stmt->bindParam(':name', $shop[0]);
            $stmt->bindParam(':ipadd', $shop[1]);
            $stmt->bindParam(':username', $shop[2]);
            $stmt->bindParam(':password', $shop[3]);
            $stmt->bindParam(':state', $shop[4]);
            $stmt->bindParam(':created_at', $dat);

            $result = $stmt->execute();
            $insertId = $this->db->lastInsertId();
            echo $result ? "Success" . $insertId : "Fail";
        }
    }

    public function updateShop($id, $name)
    {
        $stmt = $this->db->prepare("UPDATE shops SET name=:name WHERE id=:id");
        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":id", $id);
        $result = $stmt->execute();
        echo $result ? "T" : "F";
    }

    public function deleteShop($id)
    {
        $stmt = $this->db->prepare("DELETE FROM shops WHERE id=:id");
        $stmt->bindParam(":id", $id);
        $result = $stmt->execute();
        echo $result ? "Delete Success" : "Delete Fail";
    }

    public function joinData($shopid)
    {
        $stmt = $this->db->prepare(
            "SELECT
                sh.name as name,
                sh.ipadd as ipadd,
                SUM(od.price * od.amount) as total

            FROM
                shops as sh
            LEFT JOIN 
            orders as od

            ON
            od.shopid = sh.id
            WHERE 
            sh.id =:id AND sh.state = 1

        "
        );
        $stmt->bindParam(":id", $shopid);
        $stmt->execute();
        $stmt->bindParam("name", $name);
        $stmt->bindParam("ipadd", $ipadd);
        $stmt->bindParam("total", $total);
        $result = $stmt->fetchObject();

        echo "Shop name is" . $result->name . "<br>";
        echo "Shop ipadd is" . $result->ipadd . "<br>";
        echo "Shop total is" . $result->total . "<br>";
    }
}
