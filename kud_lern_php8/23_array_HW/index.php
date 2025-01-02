<?php
//В цикле for вывести только четные числа массива, двумя способами с continue и без него.
$nums = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12,];

for ($i = 1; $i < 12; $i += 2) {
    echo $nums[$i] . '<br>';

}

//for($i = 0; $i < 12; $i++) {
//    if ($i % 2 === 0) {
//        continue;
//    } else {
//        echo $nums[$i] . "\n";
//    }
//}


//Увеличить стоимость товара на 15, если цена < 120. Два способа - for и foreach.

$goods = [
    [
        'title' => 'Nokia',
        'price' => 100,
        'qty' => 10,
    ],
    [
        'title' => 'Sony',
        'price' => 120,
        'qty' => 110,
    ],
    [
        'title' => 'LG',
        'price' => 105,
        'qty' => 44,
    ],


];

echo '<pre>' . print_r($goods, 1) . '</pre>';


for ($i = 0; $i < 3; $i++) {
//    if ($goods[$i]['price'] < 120) {
//        ($goods[$i]['price'] += 15) . '<br>';
//    };
//    $goods[$i]['price'] = ($goods[$i]['price'] < 120) ? $goods[$i]['price'] + 15 : $goods[$i]['price'];
}

foreach ($goods as &$good) {
    if ($good['price'] < 120) {
        ($good['price'] += 15) . '<br>';
    }
};

echo '<pre>' . print_r($goods, 1) . '</pre>';
























