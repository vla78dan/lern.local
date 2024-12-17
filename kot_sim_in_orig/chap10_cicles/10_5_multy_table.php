<?php error_reporting(-1);

echo 'Таблица умножения' . PHP_EOL;

$i = 0;
define('MAX_NUM', 10);

while ($i < MAX_NUM) {
    $i++;
    $j = 0;
    while ($j < MAX_NUM) {
        $j++;
        echo sprintf('%3d', $i * $j);
    }
    echo PHP_EOL;
}