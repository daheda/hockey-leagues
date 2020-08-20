<?php 
namespace App\Simulator\Match;

interface ILeague
{
    public function getDivisions():array;
    public function setDivisions(array $divisions);
}

