<?php

include_once(__DIR__ . '/trams.php');
include_once(__DIR__ . '/routes.php');
include_once(__DIR__ . '/depots.php');

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
    
    if (in_array($fleetNumber, $melbourne_trams['Z3']['trams']))
        return 'Z3';
    if (in_array($fleetNumber, $melbourne_trams['A1']['trams']))
        return 'A1';
    if (in_array($fleetNumber, $melbourne_trams['A2']['trams']))
        return 'A2';
    if (in_array($fleetNumber, $melbourne_trams['B2']['trams']))
        return 'B2';
    if (in_array($fleetNumber, $melbourne_trams['C']['trams']))
        return 'C';
    if (in_array($fleetNumber, $melbourne_trams['D1']['trams']))
        return 'D1';
    if (in_array($fleetNumber, $melbourne_trams['D2']['trams']))
        return 'D2';
    if (in_array($fleetNumber, $melbourne_trams['E']['trams']))
        return 'E';
    if (in_array($fleetNumber, $melbourne_trams['E2']['trams']))
        return 'E2';
    if (in_array($fleetNumber, $melbourne_trams['C2']['trams']))
        return 'C2';
    if (in_array($fleetNumber, $melbourne_trams['SW6']['trams']))
        return 'SW6';
    if (in_array($fleetNumber, $melbourne_trams['W7']['trams']))
        return 'W7';
    if (in_array($fleetNumber, $melbourne_trams['W8']['trams']))
        return 'W8';
        
    return null;
}

function getTramAirConditioned($fleetNumber)
{
    global $melbourne_trams;
    $tramClass = getTramClass($fleetNumber);
    return $melbourne_trams[$tramClass]['air-conditioned'];
}

function getTramLowFloor($fleetNumber)
{
    global $melbourne_trams;
    $tramClass = getTramClass($fleetNumber);
    return $melbourne_trams[$tramClass]['low-floor'];
}

?>