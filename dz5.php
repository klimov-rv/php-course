<?php
$bmw = ["model" => "X5", "speed" => 120, "doors" => 5, "year" => "2015"];
$toyota = ["model" => "Camry", "speed" => 150, "doors" => 1, "year" => "2000"];
$opel = ["model" => "Astra", "speed" => 130, "doors" => 4, "year" => "2005"];

// $key = ["model", "speed", "doors", "year"];
// $values = ["X5", 120, 5, "2015"];
// foreach ($bmw as $key => $value) {
// };

$cars = ["bmw" => $bmw, "toyota" => $toyota, "opel" => $opel];
echo "<pre>".print_r($cars, 1)."</pre>";