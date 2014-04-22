<?php

include_once('trams.php');

function getTramClassAndNumber($fleetNumber)
{
    $class = getTramClass($fleetNumber);
    
    if ($class != null)
    {
        return getTramClass($fleetNumber) . ".$fleetNumber";
    }
    
    return null;
}

function getTramClass($fleetNumber)
{
    global $melbourne_trams;
    
    if (in_array($fleetNumber, $melbourne_trams['Z1']))
        return 'Z1';
    if (in_array($fleetNumber, $melbourne_trams['Z2']))
        return 'Z2';
    if (in_array($fleetNumber, $melbourne_trams['Z3']))
        return 'Z3';
    if (in_array($fleetNumber, $melbourne_trams['A1']))
        return 'A1';
    if (in_array($fleetNumber, $melbourne_trams['A2']))
        return 'A2';
    if ($fleetNumber >= 2001 && $fleetNumber <= 2002)
        return 'B1';
    if ($fleetNumber >= 2003 && $fleetNumber <= 2132)
        return 'B2';
    if ($fleetNumber >= 3001 && $fleetNumber <= 3036)
        return 'C';
    if ($fleetNumber >= 3501 && $fleetNumber <= 3538)
        return 'D1';
    if ($fleetNumber >= 5001 && $fleetNumber <= 5021)
        return 'D2';
    if (in_array($fleetNumber, $melbourne_trams['C2']))
        return 'C2';
    if (in_array($fleetNumber, $melbourne_trams['E']))
        return 'E';
    if (in_array($fleetNumber, $melbourne_trams['SW5']))
        return 'SW5';
    if (in_array($fleetNumber, $melbourne_trams['SW6']))
        return 'SW6';
    if (in_array($fleetNumber, $melbourne_trams['W6']))
        return 'W6';
    if (in_array($fleetNumber, $melbourne_trams['W7']))
        return 'W7';
        
    return null;
}

?>