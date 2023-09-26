<?php

class Rent
{
    public $car, $driver;
    public function __construct(Car $car, Driver $driver)
    {
        $this->car = $car;
        $this->driver = $driver;
    }
    public function getCar(): Car
    {
        return $this->car;
    }
    public function getDriver(): Driver
    {
        return $this->driver;
    }
}
class Driver
{
    public $name, $age, $fam, $Hr, $Ms;
    public function setName(string $name)
    {
        $this->name = $name;
    }
    public function getName(): string
    {
        return $this->name;
    }
    public function setAge(int $age)
    {
        $this->age = $age;
    }
    public function getAge(): int
    {
        return $this->age;
    }
    public function setfam(array $fam)
    {
        $this->fam = $fam;
    }
    public function getfam(): array
    {
        return $this->fam;
    }
    public function setHr(float $Hr)
    {
        $this->Hr = $Hr;
    }
    public function getHr(): float
    {
        return $this->Hr;
    }
    public function setMs(bool $Ms)
    {
        $this->Ms = $Ms;
    }
    public function getMs(): bool
    {
        return $this->Ms;
    }
}
class Car
{
    public $brand, $modal, $price, $tools, $active;
    public function __construct(string $brand, int $modal, float $price, array $tools, bool $active)
    {
        $this->brand = $brand;
        $this->modal = $modal;
        $this->price = $price;
        $this->tools = $tools;
        $this->active = $active;
    }

    public function getBrand(): string
    {
        return $this->brand;
    }

    public function getModal(): int
    {
        return $this->modal;
    }

    public function getPrice(): float
    {
        return $this->price;
    }


    public function getTools(): array
    {
        return $this->tools;
    }


    public function getActive(): bool
    {
        return $this->active;
    }
}
$kuro = new Driver();
$kuro->setName("Kuro");
$kuro->setAge(18);
$kuro->setfam(["father" => "Gojo", "Mother" => "Haruki", "sis" => "Nezuko",]);
$kuro->setHr(9.9);
$kuro->setMs(false);

$kai = new Driver();
$kai->setName("Kai");
$kai->setAge(18);
$kai->setfam(["father" => "Deku", "Mother" => "Hana", "sis" => "Nami",]);
$kai->setHr(8.9);
$kai->setMs(true);


$toyota = new Car("Alphbert", "2017", "13.5", ["Water", "Tissue", "Cupon"], TRUE);
$fararri = new Car("Fararri", "2023", "30", ["Water", "Tissue", "Drink"], FALSE);

$rent = new Rent($toyota, $kuro);
$rent2 = new Rent($fararri, $kai);

$list = [$rent, $rent2];

// echo "There are" . count($list) . "Cars in this company";
$serialData = serialize($list);
$ary = unserialize($serialData);
echo "<pre>" . print_r($ary, true) . "</pre>";
echo "<hr>";
echo $list[1]->getDriver()->getName();
