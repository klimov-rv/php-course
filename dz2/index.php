<?php
require_once("src/functions.php");
$arrOfStrings = ["принимать массив","строк","и" ,"выводить" ];

task1( $arrOfStrings, rand(0,1));
echo "<br>";
task2("/", 1, 2, 3, 5.2);
echo "<br>";
task3(3,8);
echo "<br>";
task4();
echo "<br>";
task5("Карл у Клары украл Кораллы", "delK");
echo "<br>";
task5("Две бутылки лимонада", "replace2on3");
echo "<br>";

task6();
task7("test.txt");