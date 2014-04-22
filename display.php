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
<ul>
<?php

include_once('functions.php');

foreach ($melbourne_trams as $class => $trams)
{
    echo "<li><p>$class class:</p><ul>";
    
    foreach ($trams as $tram_number)
    {
        $tram = $class . '.' . $tram_number;
        echo '<li><a href="http://railgallery.wongm.com/page/search/' . $tram . '">' . $tram . '</a>';
    }
    
    echo "</ul></li>";
}
?>
</ul>
</body>