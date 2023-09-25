<?php

interface GameRules
{
    public function gameSc();
    public function gamedm();
    public function gamefps();
    public function gamegrph();
    public function gameCon();
}

class Index implements GameRules
{
    public function gameSc()
    {
        echo "A <hr>";
    }
    public function gamedm()
    {
        echo "B <hr>";
    }
    public function gamefps()
    {
        echo "C <hr>";
    }
    public function gamegrph()
    {
        echo "D <hr>";
    }
    public function gameCon()
    {
        echo "E <hr>";
    }
}
$game = new Index();
