<?php

function task1($arrOfStrings, $concatInOneString): void
{
    $return_string = "";
    if ($concatInOneString) {
        $tmp_string = implode(" ", $arrOfStrings);
        $return_string = "<p>".$tmp_string."</p>";
    } else {
        foreach ($arrOfStrings as $elString) {
            $return_string .= "<p>";
            $return_string .= $elString;
            $return_string .= "</p>";
        }
    }
    echo $return_string;
}

function task2($operation, ...$operationNumbers): void
{
    if ($operation == "+")
        $arithmeticOperation = "Addition";
    elseif ($operation == "-")
        $arithmeticOperation = "Subtraction";
    elseif ($operation == "/")
        $arithmeticOperation = "Division";
    elseif ($operation == "*")
        $arithmeticOperation = "Multiplication";
    else
        $arithmeticOperation = NULL;


    $return_string = $arithmeticOperation.": ";
    $result = NULL;
    $i = 0;
        if (isset($arithmeticOperation)) {
            foreach ($operationNumbers as $elNumber) {
                if ($i > 0)
                    $return_string .= " $operation ";
                $return_string .= $elNumber;
                $i++;
                $result = doTheMath($arithmeticOperation, $elNumber, $result);
            }

            if (isset($result))
                echo $return_string." = ".$result;
            else
                echo "Ошибка в подсчёте";
        }
        else
            echo "Ошибка введёния оператора";
}

function doTheMath($arithmeticOperation, $elNumber, $result) {
    if ($arithmeticOperation == "Addition")
        $result = $result + $elNumber;
    if ($arithmeticOperation == "Subtraction")
        $result = $result - $elNumber;
    if ($arithmeticOperation == "Division")
        $result = $result / $elNumber;
    if ($arithmeticOperation == "Multiplication")
        $result = $result * $elNumber;
    return $result;
}

function task3($number1, $number2): void
{
    if  (is_int($number1) && is_int($number2)) {
        echo "<table>";
        for ($i = 1; $i <= $number1; $i++) {
            echo "<tr>";
            for ($j = 1; $j <= $number2; $j++) {
                $result = $j * $i;
                echo "<td>";
                echo $j . " * " . $i . " = " . $result;
                echo "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "не тот тип переменных";
    }
}

function task4() {
    echo "Информация о текущей дате: ".date('d.m.Y H:i')."<br>";
    $timestamp=strtotime("24.02.2016 00:00:00");
    echo "unixtime время соответствующее 24.02.2016 00:00:00: ".gmdate("d.m.Y H:i:s", $timestamp)."<br>";
}


function task5($str, $action) {
    if ($action == "delK") {
        echo str_replace("К", "", $str);
    } elseif($action == "replace2on3") {
        echo str_replace("Две", "Три", $str);
    } else {
        echo "неверное действие";
    }
}


function task6()
{
    file_put_contents('test.txt', 'Hello again!');
}
function task7($filename)
{
    $data = file_get_contents($filename);
    var_dump($data);
}