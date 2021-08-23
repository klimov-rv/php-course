<?php

$age = rand(-50, 100);
const MIN_AGE = 1;
const MIDDLE_AGE = 18;
const MAX_AGE = 65;

if ($age >= MIDDLE_AGE && $age <= MAX_AGE) {
    echo "Вам еще работать и работать";
} elseif ($age > MAX_AGE) {
    echo "Вам пора на пенсию";
} elseif ($age >= MIN_AGE && $age < MIDDLE_AGE) {
    echo "Вам ещё рано работать";
} else {
    echo "Неизвестный возраст";
}
echo "<br>";