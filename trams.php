<?php

//SW6
$melbourne_trams['SW6'] = array(888, 925, 928, 937, 938, 939, 961);

//W6
$melbourne_trams['W6'] = array(983, 1000);

//W7
$melbourne_trams['W7'] = array(1020);

//W8
$melbourne_trams['W8'] = array(946, 957, 959, 981, 1010);

//Z1
$melbourne_trams['Z1'] = array(9, 16, 22, 23, 28, 30, 34, 35, 52, 56, 59, 65, 69, 70, 71, 78, 86, 88, 92, 94, 95);

//Z2
$melbourne_trams['Z2'] = array(101, 114);

//Z3
for ($i = 116; $i <= 230; $i++)
{
    if ($i != 149)
    {
        $melbourne_trams['Z3'][] = $i;
    }
}

//A1
for ($i = 231; $i <= 258; $i++)
{
    $melbourne_trams['A1'][] = $i;
}

//A2
for ($i = 259; $i <= 300; $i++)
{
    $melbourne_trams['A2'][] = $i;
}

//B2
for ($i = 2003; $i <= 2132; $i++)
{
    $melbourne_trams['B2'][] = $i;
}

//C
for ($i = 3001; $i <= 3036; $i++)
{
    $melbourne_trams['C'][] = $i;
}

//C2
$melbourne_trams['C2'] = array(5103, 5106, 5111, 5113, 5123);

//D1
for ($i = 3501; $i <= 3538; $i++)
{
    $melbourne_trams['D1'][] = $i;
}

//D2
for ($i = 5001; $i <= 5021; $i++)
{
    $melbourne_trams['D2'][] = $i;
}
//E
for ($i = 6001; $i <= 6050; $i++)
{
    $melbourne_trams['E'][] = $i;
}
//E2
for ($i = 6051; $i <= 6080; $i++)
{
    $melbourne_trams['E2'][] = $i;
}
?>