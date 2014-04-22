<?php

//SW5
$melbourne_trams['SW5'] = array(845, 846);

//SW6
$melbourne_trams['SW6'] = array(852, 854, 856, 866, 870, 881, 884, 888, 892, 986, 905, 907, 925, 928, 929, 937, 938, 939, 946, 953, 954, 960, 961);

//W6
$melbourne_trams['W6'] = array(971, 977, 981, 982, 983, 992, 1000);

//W7
$melbourne_trams['W7'] = array(1005, 1010, 1012, 1015, 1019, 1020, 1022, 1031, 1039);

//Z1
$melbourne_trams['Z1'] = array(1, 4, 9, 10, 14, 16, 19, 22, 23, 28, 30, 34, 35, 39, 52, 56, 59, 63, 65, 69, 70, 71, 78, 86, 88, 92, 94, 95, 96, 100);

//Z2
$melbourne_trams['Z2'] = array(101, 113, 114);

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

//B1
for ($i = 2001; $i <= 2002; $i++)
{
    $melbourne_trams['B1'][] = $i;
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
for ($i = 6001; $i <= 6006; $i++)
{
    $melbourne_trams['E'][] = $i;
}
?>