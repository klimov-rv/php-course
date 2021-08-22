<?php

$age = 100;

if (($age >= 18) && ($age <= 65)) {
    echo "Вам еще работать и работать";
    echo "<br>";
} elseif ($age > 65) {
    echo "Вам пора на пенсию";
    echo "<br>";
} elseif (($age >= 1) && ($age <= 17)) {
    echo "Вам ещё рано работать";
    echo "<br>";
} else {
    echo "Неизвестный возраст";
    echo "<br>";
}