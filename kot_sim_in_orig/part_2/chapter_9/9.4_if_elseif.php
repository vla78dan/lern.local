<?php
define('CHARS', [ 'a', 'b', 'c']);
$char = CHARS[array_rand(CHARS)];

if ($char == 'a') {
    echo 'Передан первый символ алфавита';
} elseif ($char == 'b') {
    echo 'Передан second символ алфавита';
} elseif ($char == 'c') {
    echo 'Передан third символ алфавита';
} else {
    'Символ не входит в список';
}