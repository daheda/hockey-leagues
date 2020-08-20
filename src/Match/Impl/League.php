<?php
namespace App\Simulator\Match\Impl;
use App\Simulator\Match\ILeague,
    App\Simulator\Match\Impl\Division;

class League implements ILeague
{
    use \App\Simulator\Match\Rules;

    private $divisions;

    public function __construct()
    {
        $this->buildLeague();
    }

    private function buildLeague()
    {
        // it should be dynamic and inject to remove high dependecy...
        $divisionWest = new Division("WEST");
        $divisionEst = new Division("EST");
        $this->divisions =  [$divisionWest, $divisionEst];
    }

    public function playFinal()
    {
        $teams = [];
        foreach($this->divisions as $div) {
            $team = $div->getTeams()[0];
            $team->setName($div->getName() . " - " .$team->getName());
            $teams[] = $team;
        }
        $this->playRound("Final", $teams);
        $winner = $this->getWinner($teams);
    }

    public function getDivisions():array
    {
        return $this->divisions;
    }

    public function setDivisions(array $divisions)
    {
        $this->divisions = $divisions;
    }
}