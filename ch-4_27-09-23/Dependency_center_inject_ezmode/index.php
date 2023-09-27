<?php
require_once "player.php";
// namespace ;

class Index
{
    public function __construct()
    {
        $player = new Player();
        $player->setMusicPath("C:\Users\User\Downloads");
        $player->setMusic("One_Call_Away.mp3");
        $this->playNow($player->getMusicPath(), $player->getMusic());
    }
    public function playNow($path, $music)
    {
        echo "playing " . $music . " From " . $path .  ".";
    }
}
new Index;
