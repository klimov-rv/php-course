<?php

$day = "Вс";
$days = ["Пн","Вт","Ср","Чт","Пт","Сб","Вс"];

switch ($day) {
    case "Пн":
    case "Вт":
    case "Ср":
    case "Чт":
    case "Пт":
        echo "Это рабочий день";
        break;
    case "Сб":
    case "Вс":
        echo "Это выходной день";
        break;
    default:
        echo "Неизвестный день";
}