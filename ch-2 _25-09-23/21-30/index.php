<?php

require_once "she_inter.php";
require_once "he_inter.php";

class Indexx implements heInterr
{
    private $data;
    public function shegoToSchool($data)
    {
        $this->data = $data;
    }
    public function outPut()
    {
        echo "<pre>" . print_r($this->data, true) . "</pre>";
    }
    public function busy()
    {
        echo "This person is busy with " . $this->data[count($this->data) - 1];
    }
    public function hegoToSchool($data)
    {
        $this->data = $data;
    }
    public function hebusy()
    {
        echo "This person is busy with " . $this->data[count($this->data) - 1];
    }
}
$obj = new Indexx;
$sheary = ["Book", "pen", "Bag", "cos"];
$heary = ["Book", "pen", "Bag", "ball"];
$obj->shegoToSchool($sheary);
$obj->outPut();
$obj->busy();


$bb = new Indexx();
$bb->shegoToSchool($heary);
$bb->outPut();
$bb->hebusy();
