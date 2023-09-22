<?php

trait Member
{
    var $name = "Kuro";
    public function gg()
    {
        echo "Hi" . "<br>";
    }
}
trait Hacker
{
    var $age = 20;
    public function hack()
    {
        echo "Let Me Hack" . "<br>";
    }
}
trait tester
{
    var $tt = "just kidding";
}
trait collect
{
    use Member, Hacker, tester;
}
class php13trait
{
    use collect;
}
$obj = new php13trait();
$obj->gg();
$obj->hack();
echo $obj->tt;
