<?php

echo "Welcome to multidimensional array lesson 18:<br>";
$multarr = array(
    array(1, 3, 2),
    array(2, 4, 5),
    array(2, 4)
);
echo $multarr[1][0];
for ($i = 0; $i < count($multarr); $i++) {
    for ($j = 0; $j < count($multarr[$i]); $j++) {
        echo $multarr[$i][$j];
        echo "  ";
    }
    echo "<br>";
}
