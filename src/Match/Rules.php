<?php
namespace App\Simulator\Match;

trait Rules {

    static $NBR_MATCH = 7;

    private function playRound($name, $group)
    {
        print "{$name} ". $group[0]->getName() ." VS " .$group[1]->getName() ." : ";
       
        $this->initRound($group);

        for($i=1; $i<= self::$NBR_MATCH; $i++) {
            if ($this->isWinner($group[0]) || $this->isWinner($group[1])) {
                break;
            }
            $probaDeReussite = (float)rand()/(float)getrandmax();
            $diff1 = abs($probaDeReussite - $group[0]->getStrength());
            $diff2 = abs($probaDeReussite - $group[1]->getStrength());
            if ($diff1 > $diff2) {
                $group[0]->addVictory();
            }
            if ($diff1 < $diff2) {
                $group[1]->addVictory();
            }
        }
    }

    private function isWinner ($team)
    {
        return $team->getVicotries() >= 4;
    }

    private function initRound ($group)
    {
        array_map(function ($elt) {
            $elt->setVictories(0);
        }, $group);
    }

    private function getWinner($group) 
    {
        usort($group, function ($a, $b) {
            return $b->getVicotries() <=> $a->getVicotries();
        });
        $winner = $group[0];
        $loser = $group[1];
        //Should be handled by Utils
        print " WINNER  ". $winner->getName() ." ( {$winner->getVicotries()}/{$loser->getVicotries()} )\n";
        return $winner;
    }

}