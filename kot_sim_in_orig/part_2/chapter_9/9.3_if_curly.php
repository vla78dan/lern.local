<?php
$rand = rand(1, 100);
$num = $rand % 2;

if ($num == 0) {
    echo "Выпало четное число ";
    echo $rand;
    echo ' <br />';
} else {
    echo "Выпало нечетное число";
    echo $rand;
    echo "<br />";
}
