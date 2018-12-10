<?php

//break prekida izvršenja petelje
//izlazi na kraj tijela
//continue -> prekida izvršavanje i vrača na pocetak

echo "<hr>dvostruka petlja <br>";
$counter = 1;
$x = 1;
$y = 1;
while ($x <= 15) {
    while ($y <= 10) {
        echo "coord: " . $x . ' ' . $y . '=' . ($x * $y) . '(' .$counter.')<br>';
        $y++;
        $counter++;
        if ($counter > 110) {
            break 2;
        }
    }
    $y = 0;
    $x++;
}



