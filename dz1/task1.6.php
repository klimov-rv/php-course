<?php

echo "<table>";
for ($i = 1; $i <= 10; $i++) {
    echo "<tr>";
    for ($j = 1; $j <= 10; $j++) {
        if (($j % 2) == 0 && ($i % 2) == 0) {
            $result = "(".($j*$i).")";
        } elseif(($j % 2) == 1 && ($i % 2) == 1) {
            $result = "[".($j*$i)."]";
        } else {
            $result = $j*$i;
        }
        echo "<td>";
        echo $j." * ".$i." = ".$result;
        echo "</td>";
    }
    echo "</tr>";
}
echo "</table>";