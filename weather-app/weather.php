<?php

require_once __DIR__ . '/vendor/autoload.php';
require_once '/src/WeatherService.php';

if($argc < 2){
 echo 'Correct Usage: php weather.php city';
 exit(1);
}

$weatherService = new WeatherService();
$city = $argv['1'];
echo "Getting weather for $city...\n";
$weather = $weatherService->getWeather('London');

echo "\n";
echo "City: " . $weather['city'] . "\n";
echo "Temperature: " . $weather['temperature'] . "C\n";

var_dump($weather);
