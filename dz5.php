<?php
$bmw = ["model" => "X5", "speed" => 120, "doors" => 5, "year" => "2015"];
$toyota = ["model" => "Camry", "speed" => 150, "doors" => 1, "year" => "2000"];
$opel = ["model" => "Astra", "speed" => 130, "doors" => 4, "year" => "2005"];

$cars = ["bmw" => $bmw, "toyota" => $toyota, "opel" => $opel];
echo "<pre>".print_r($cars, 1)."</pre>";

git config --global user.name "Klimov Roman"


qgit config --global user.email klimov.rv@ya.ru