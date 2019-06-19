<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Melbourne's Tram Fleet</title>
</head>
<body>
<h1>Melbourne's Tram Fleet</h1>
<p>This should list all trams currently in service with Yarra Trams on the Melbourne tramway network</p>
<p>Search for tram photos at <a href="http://railgallery.wongm.com/">http://railgallery.wongm.com/</a></p>

<?php

include_once('functions.php');

echo "<h2>Trams</h2>";
echo "<ul>";

foreach ($melbourne_trams as $class => $classData)
{
    echo "<li><p>$class class:</p><ul>";
    
    foreach ($classData['trams'] as $tram_number)
    {
        $tram = $class . '.' . $tram_number;
        echo '<li><a href="http://railgallery.wongm.com/page/search/' . $tram . '">' . $tram . '</a>';
    }
    
    echo "</ul></li>";
}

echo "</ul>";
echo "<h2>Routes</h2>";
echo "<ul>";

foreach ($tram_routes as $class => $routes)
{
    echo "<li><p>$class class:</p><ul>";
	echo '<li>Route ' . join(', ', $routes) . '</a>';
    
    echo "</ul></li>";
}

echo "</ul>";
echo "<h2>Routes</h2>";
echo "<ul>";

foreach ($tram_depots as $depot => $routes)
{
    echo "<li><p>$depot depot</p><ul>";
	echo '<li>Routes ' . join(', ', $routes) . '</a>';
    
    echo "</ul></li>";
}
echo "</ul>";
?>
</ul>
</body>
