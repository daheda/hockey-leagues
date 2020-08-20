<?php 
namespace App\Simulator\Match;

class Simulator 
{

    private $printer;
    private $league;


    public function getPrinter (): \App\Simulator\Utils\IPrinter  {
        return $this->printer;
    }

    public function setPrinter (\App\Simulator\Utils\IPrinter $printer) {
        $this->printer = $printer;
    }

    public function getLeague()
    {
        return $this->league;
    }

    public function setLeague($league)
    {
        $this->league = $league;
    }

    public function __construct () {

    }

    public function simulate () {
        foreach($this->league->getDivisions() as $div ) {
           print "######## DIVISION {$div->getName()} #########\n";
           $div->playMatch();
           print "#############################################\n";
        }
        # here we have the final
        $this->league->playFinal();
        
    }

    public function print ()
    {
        foreach($this->league->getDivisions() as $div ) {
            $this->printer->print($div->getName()); 
        }
        
    }
}