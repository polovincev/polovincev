<?php
/**
 * Created by PhpStorm.
 * User: Roman
 * Date: 31/10/2016
 * Time: 01:16
 */

$bmw =[
    "model" => "X5",
    "speed" => 120,
    "doors" => 5,
    "year" => "2015"
];

$toyota =[
    "model" => "Camry",
    "speed" => 140,
    "doors" => 4,
    "year" => "2014"
];

$opel =[
    "model" => "Astra",
    "speed" => 160,
    "doors" => 5,
    "year" => "2010"
];

$cars = [
    "bmw" => $bmw,
    "toyota" => $toyota,
    "opel" => $opel
];



foreach ($cars as $key => $value) {
    echo "CAR $key<br>";
    echo "{$value['model']} {$value['speed']} {$value['doors']} {$value['year']}<br>";
    echo "<br>";
}