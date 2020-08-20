<?php
namespace App\Simulator\Match\Impl;
use App\Simulator\Match\IPlayer;

class Player implements IPlayer
{
    private $cote;
    const MIN_COTE = 0.15;
    const MAX_COTE = 1;
    public function __construct()
    {
        $this->buildPlayer();
    }

    private function buildPlayer()
    {
        $rand = (float)rand()/(float)getrandmax();
        while ($rand < self::MIN_COTE) {
            $rand = (float)rand()/(float)getrandmax();
        }
        $this->cote = $rand;
    }

    public function getCoteDeReussite ()
    {
        return $this->cote;
    }
    public function setCoteDeReussite ($cote)
    {
        $this->cote = $cote;
    }
}