<?php
namespace App\Simulator\Match;

interface ITeam 
{
    public function getPlayer($index);
    public function getPlayers();
}