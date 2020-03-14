<?php

$url = "http://api.openweathermap.org/data/2.5/weather?id=1337179&lang=en&units=metric&APPID=d1f4d6190257842e4b9546005453edb6";

$contents = file_get_contents($url);
$clima = json_decode($contents);

$temp_max = $clima -> main -> temp_max;
$temp_min = $clima -> main -> temp_min;

$today = date("F j, Y, g:i a");
$cityname = $clima->name;

echo $cityname . " - " . $today . "<br>";
echo "Temp Max: " . $temp_max . "&deg;C<br>";
echo "Temp Min: " . $temp_min . "&deg;C<br>";

?>