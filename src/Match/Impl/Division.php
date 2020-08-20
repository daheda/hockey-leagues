<?php
namespace App\Simulator\Match\Impl;
use App\Simulator\Match\IDivision,
    App\Simulator\Match\Impl\Team;

class Division implements IDivision
{
    use \App\Simulator\Match\Rules;

    private $name;
    private $teams;
    const NBR_TEAM = 8;
    const NBR_VICTOIRE = 4;

    public function __construct($name) 
    {
        $this->name = $name;
        $this->buildDivision();
    }

    private function buildDivision ()
    {
        // it should be dynamic and/or inject to remove high dependecy...
        $startName = 65;
        $max = $startName + Division::NBR_TEAM ;
        for ($i = 65; $i < $max ; $i ++) {
            $name = chr($i);
            $team = new Team($name);
            $this->teams[] = $team;
        }
       
    }

    public function playMatch()
    {
        
        $round = 1;
        while (count ($this->teams) > 1) {
            print "Round #" . $round ."\n";
            $winners = $this->teams;        
            $chunck = array_chunk($winners, 2);
            $newWinners = [];
            foreach($chunck as $group) {
                $this->playRound("Serie", $group);
                $winner = $this->getWinner($group);
                $newWinners [] = $winner;
            }
            $this->teams = $newWinners;
            $round +=1;
        }
    }

    public function getName():string
    {
        return $this->name;
    }

    public function setName(string $name)
    {
        $this->name = $name;

    }

    public function getTeams():array
    {
        return $this->teams;

    }

    public function setTeams(array $teams)
    {
        $this->teams = $teams;
    }

    public function isValid () 
    {
        return count ($this->division) == self::NBR_TEAM;
    }
}