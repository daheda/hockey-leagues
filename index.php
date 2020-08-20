<?php 

print "################################\n";
print "     BIENVENUE AU SIMULATEUR       \n";
print "################################\n";

require './autoload.php';
use App\Simulator\Match\Simulator,
    App\Simulator\Utils\Printer,
    App\Simulator\Match\Impl\League;


$simulator = new Simulator ();
$simulator->setLeague(new League());
$simulator->setPrinter(new Printer);
$simulator->simulate();