<?php

//SW6
$melbourne_trams['SW6']['low-floor'] = false;
$melbourne_trams['SW6']['air-conditioned'] = false;
$melbourne_trams['SW6']['trams'] = array(925, 937, 938, 939);

//W6
$melbourne_trams['W6']['low-floor'] = false;
$melbourne_trams['W6']['air-conditioned'] = false;
$melbourne_trams['W6']['trams'] = array(1000);

//W7
$melbourne_trams['W7']['low-floor'] = false;
$melbourne_trams['W7']['air-conditioned'] = false;
$melbourne_trams['W7']['trams'] = array(1020);

//W8
$melbourne_trams['W8']['low-floor'] = false;
$melbourne_trams['W8']['air-conditioned'] = false;
$melbourne_trams['W8']['trams'] = array(856, 888, 928, 946, 957, 959, 961, 981, 983, 1010);

//Z1
$melbourne_trams['Z1']['low-floor'] = false;
$melbourne_trams['Z1']['air-conditioned'] = false;
$melbourne_trams['Z1']['trams'] = array(9, 16, 22, 23, 28, 30, 34, 35, 52, 56, 59, 65, 69, 70, 71, 78, 86, 88, 92, 94, 95);

//Z2
$melbourne_trams['Z2']['low-floor'] = false;
$melbourne_trams['Z2']['air-conditioned'] = false;
$melbourne_trams['Z2']['trams'] = array(101, 114);

//Z3
$melbourne_trams['Z3']['low-floor'] = false;
$melbourne_trams['Z3']['air-conditioned'] = false;
$melbourne_trams['Z3']['trams'] = array();
for ($i = 116; $i <= 230; $i++)
{
    if ($i != 149)
    {
        $melbourne_trams['Z3']['trams'][] = $i;
    }
}
//A1
$melbourne_trams['A1']['low-floor'] = false;
$melbourne_trams['A1']['air-conditioned'] = false;
$melbourne_trams['A1']['trams'] = array();
for ($i = 231; $i <= 258; $i++)
{
    $melbourne_trams['A1']['trams'][] = $i;
}

//A2
$melbourne_trams['A2']['low-floor'] = false;
$melbourne_trams['A2']['air-conditioned'] = false;
$melbourne_trams['A2']['trams'] = array();
for ($i = 259; $i <= 300; $i++)
{
    $melbourne_trams['A2']['trams'][] = $i;
}

//B2
$melbourne_trams['B2']['low-floor'] = false;
$melbourne_trams['B2']['air-conditioned'] = true;
$melbourne_trams['B2']['trams'] = array();
for ($i = 2003; $i <= 2132; $i++)
{
    $melbourne_trams['B2']['trams'][] = $i;
}

//C
$melbourne_trams['C']['low-floor'] = true;
$melbourne_trams['C']['air-conditioned'] = true;
$melbourne_trams['C']['trams'] = array();
for ($i = 3001; $i <= 3036; $i++)
{
    $melbourne_trams['C']['trams'][] = $i;
}

//C2
$melbourne_trams['C2']['low-floor'] = true;
$melbourne_trams['C2']['air-conditioned'] = true;
$melbourne_trams['C2']['trams'] = array(5103, 5106, 5111, 5113, 5123);

//D1
$melbourne_trams['D1']['low-floor'] = true;
$melbourne_trams['D1']['air-conditioned'] = true;
$melbourne_trams['D1']['trams'] = array();
for ($i = 3501; $i <= 3538; $i++)
{
    $melbourne_trams['D1']['trams'][] = $i;
}

//D2
$melbourne_trams['D2']['low-floor'] = true;
$melbourne_trams['D2']['air-conditioned'] = true;
$melbourne_trams['D2']['trams'] = array();
for ($i = 5001; $i <= 5021; $i++)
{
    $melbourne_trams['D2']['trams'][] = $i;
}

//E
$melbourne_trams['E']['low-floor'] = true;
$melbourne_trams['E']['air-conditioned'] = true;
$melbourne_trams['E']['trams'] = array();
for ($i = 6001; $i <= 6050; $i++)
{
    $melbourne_trams['E']['trams'][] = $i;
}

//E2
$melbourne_trams['E2']['low-floor'] = true;
$melbourne_trams['E2']['air-conditioned'] = true;
$melbourne_trams['E2']['trams'] = array();
for ($i = 6051; $i <= 6090; $i++)
{
    $melbourne_trams['E2']['trams'][] = $i;
}

?>