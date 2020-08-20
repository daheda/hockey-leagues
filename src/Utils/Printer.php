<?php 
namespace App\Simulator\Utils;
use App\Simulator\Utils\IPrinter;

class Printer implements IPrinter 
{

    public function print ($str) 
    {
        echo "##  $str\n";    
    }

}