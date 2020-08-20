<?php
namespace App\Simulator\Match\Impl;
use App\Simulator\Match\ITeam,
    App\Simulator\Match\Impl\Player; 

class Team implements ITeam 
{
    private $players ;
    private $name;
    private $nbrVictoire = 0;
    const NBR_PLAYER = 21;

    public function __construct($name)
    {
        $this->name = $name;
        $this->buildTeam();
    }

    private function buildTeam()
    {
        for($i = 1; $i <= self::NBR_PLAYER; $i ++) 
        {
            $player = new Player();
            $this->players [] = $player;
        }

    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function addVictory()
    {
        $this->nbrVictoire += 1;
    }

    public function setVictories($victories)
    {
        $this->nbrVictoire = $victories;
    }

    public function getVicotries()
    {
        return $this->nbrVictoire;
    }
    public function getStrength()
    {
        $sum = 0;
        foreach ($this->players as $player) {
            $sum += $player->getCoteDeReussite();
        }
        return $sum / self::NBR_PLAYER;
    }

    public function getPlayer($index) 
    {
        if (array_key_exists($index, $this->players)) 
        {      
            return $this->players();
        }
        return null;
    }

    public function getPlayers()
    {
        return $this->players;
    }
}