<?php
namespace App\Simulator\Match;

interface IDivision 
{
   public function getName():string;
   public function setName(string $name);
   public function getTeams():array;
   public function setTeams(array $teams);
}