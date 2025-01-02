<?php error_reporting(E_ALL);
/*
$nums = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11,];

$q = 0;
while ($q < 10) {
    echo $nums[$q] . "\n";
    $q++;
}

for ($q = 0; $q < 11; $q++) {
    echo $nums[$q] . "\n";
}

foreach ($nums as $num) {
    echo $num . '<br>';
}

foreach ($nums as $key => $value) {
    echo "Key: $key, Value: $value<br>";
}

$goods = [
    [
        'title' => 'Nokia',
        'price' => 100,
        'qty' => 10,
    ],
    [
        'title' => 'Sony',
        'price' => 98,
        'qty' => 110,
    ],
    [
        'title' => 'LG',
        'price' => 125,
        'qty' => 44,
    ],


];

echo '<pre>' . print_r($goods, 1) . '</pre>';

//for ($i = 0; $i < 3; $i++) {
//    echo "Наименование: {$goods[$i]['title']}. <br>";
//    echo "Цена: {$goods[$i]['price']}. <br>";
//    echo "Количество: {$goods[$i]['qty']}. <br>";
//    echo '<hr>';
//}

foreach ($goods as $good) {
    echo "Наименование: {$good['title']}. <br>";
    echo "Цена: {$good['price']}. <br>";
    echo "Количество: {$good['qty']}. <br>";
    echo '<hr>';
}
*/
/*
$nums = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12,];

$i =0;
while ($i < 10) {
    echo $nums[$i] . '<br>';
    $i++;
}

for ($i = 0; $i < 10; $i++) {
    echo $nums[$i] . '<br>';
}


foreach ($nums as $item) {
    echo $item . '<br>';
}


foreach ($nums as $key => $value) {
    echo "Key: $key, Value: $value" . '<br>';
}
*/

$goods = [
    [
        'title' => 'Nokia',
        'price' => 100,
        'qty' => 10,
    ],
    [
        'title' => 'Sony',
        'price' => 98,
        'qty' => 110,
    ],
    [
        'title' => 'LG',
        'price' => 125,
        'qty' => 44,
    ],


];

echo '<pre>' . print_r($goods, 1) . '</pre>';

//for ($i = 0; $i < 3; $i++) {
//    $goods[$i]['total'] = $goods[$i]['price'] * $goods[$i]['qty'];
//    $goods[$i]['price'] *= 2;
//
//}

foreach ($goods as &$good) {
    $good['price'] *= 2;
}

echo '<pre>' . print_r($goods, 1) . '</pre>';










//for ($i = 0; $i < 3; $i++) {
//    echo "Наменование: {$goods[$i]['title']} . <br>";
//    echo "Цена: {$goods[$i]['price']} . <br>";
//    echo "Количество: {$goods[$i]['qty']} . <br>";
//    echo '<hr>';
//}


//foreach ($goods as $good) {
//    echo "Наменование: {$good['title']} . <br>";
//    echo "Цена: {$good['price']} . <br>";
//    echo "Количество: {$good['qty']} . <br>";
//    echo '<hr>';
//}














