<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>10_4</title>
</head>
<body>
<h1>hello</h1>


<?php
//str_split — Преобразовывает строку в массив

$str = "Hello Friend";

$arr1 = str_split($str);
$arr2 = str_split($str, 3);

echo'<pre>';
print_r($arr2);
echo'<pre>';

//print_r($arr2);



?>
<h2>Hello2</h2>
</body>
</html>

<?php

/*
 *
 *
 *
 *strlen — Получает длину строки

$string = "Dodd is a web developer!    ";
$str2 = strlen( $string);
echo'<pre>';
echo $str2;
echo'<pre>';
 *
 *strip_tags — Удаляет HTML- и PHP-теги из строки

$text = '<p>Параграф.</p><!-- Комментарий --> <a href="#fragment">Ещё текст</a>';
echo strip_tags($text);
echo "\n";
 *
 *str_replace — Заменяет вхождения строки поиска строкой замены

$string = "Dodd is a web developer!";
$str2 = str_replace('Dodd', 'Bobbb', $string);
echo'<pre>';
echo $str2;
echo'<pre>';
 *
 *trim — Удаляет пробельные или другие символы в начале и конце строки\

$hello = "   Hello World!      ";
$hello2 = trim($hello);
echo'<pre>';
var_dump($hello2);
echo'<pre>';
 *
 *implode — Объединяет элементы массива в строку
$array = ['имя', 'почта', 'телефон'];

$res = implode(",", $array);
echo'<pre>';
print_r($res);
echo'<pre>';
 *
 *explode — Разбивает строку разделителем

$name = 'Doddy Bobb Todddd';
$res = explode(" ", $name, 2);
echo'<pre>';
print_r($res);
echo'<pre>';
 *
 *extract — Импортирует переменные массива в текущую таблицу символов

$fruits = array(
    'fruit1' => 'apple',
    'fruit2' => 'mango',
    'fruit3' => 'pie');
extract($fruits);
echo '<pre>';
echo $fruit1;
echo '</pre>';
 *
 *
 *compact — Создаёт массив, содержащий названия переменных и их значения

$fruit1 = 'mango';
$fruit2 = 'apple';
$fruit3 = 'pie';

$fruits = array(
    'fruit1' => $fruit1,
    'fruit2' => $fruit2,
    'fruit3' => $fruit3);
print_r($fruits);


echo '<pre>';
print_r(compact('fruit1', 'fruit2', 'fruit3'));
echo '</pre>';
 *
 *array_reverse — Возвращает массив с элементами в обратном порядке

$names = ["man0" =>'Alex', "man1" =>'Dodd', "man2" =>'Tim', "man3" =>'Bobb', "man4" =>'Doddddd', "man5" =>'Mod',];
$names2 = ['Bobb', 'Doddddd', 'Mod',];

$resault_revers = array_reverse($names2, true);

echo '<pre>';
print_r($resault_revers);
echo '</pre>';
 *
 *
 *array_rand — Выбирает один или несколько случайных ключей из массива

$names = ["man" =>'Alex', "man2" =>'Dodd', 'Tim', 'Bobb', "man3" =>'Doddddd', 'Mod',];
//$names2 = [];
//$res = array_merge($names, $names2);
$resault_rand = array_rand($names, 2);

echo '<pre>';
print_r($resault_rand);
echo '</pre>';


 *
 *array_merge(); Объединяет элементы одного или нескольких массивов вместе (если входные массивы имеют одинаковые строковые ключи, то более позднее значение этого ключа перезапишет предыдущее; если массивы содержат числовые ключи, будет добавлено более позднее значение). Начиная с версии 7.4. 0 эту функцию можно вызвать без каких-либо параметров, и она вернет пустой массив.
 *$names = ['Alex', 'Dodd', 'Tim',];
//$names['1'] = 'Dodd';
$names2 = ['Bobb', 'Doddddd', 'Mod',];
$result = array_merge($names, $names2);
print_r($result);

$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);

echo '<pre>';
$res2 = array_merge($array1, $array2);
print_r($res2);

echo '</pre>';
 *
 *array_values(); Возвращпет все значения ключей массива
$array = [0 => 100, "color" => "red", "fruit" => "banana",];
print_r(array_values($array));
 *
 * //array_keys— Возвращает все или некоторое подмножество ключей массива
$array = [0 => 100, "color" => "red", "fruit" => "banana",];
print_r(array_keys($array));
 * array_key_exists
 * array_keys

 *$names = ['Alex', 'Dodd', 'Tim',];
//$names['1'] = 'Dodd';
$names2 = ['Bobb', 'Dodd','Mod',];

$food = array(
    'fruits' => array('orange', 'banana', 'apple'),
    'veggie' => array('carrot', 'collard', 'pea')
);
if(array_key_exists('veg', $food)){
    echo "Key exist";
} else {
    echo "No key exist";
}
//include ('app/header.php');
require_once ('header.php');
require_once ('header.php');
//echo $name;


//in_array();Проверяет, существует ли значение в массиве

if (in_array('Dodd', $names)) {
    echo 'Найдено';
} else {
    echo 'Значение не найдено';
}

//count();

//echo count($names);

$food = array(
        'fruits' => array('orange', 'banana', 'apple'),
        'veggie' => array('carrot', 'collard', 'pea')
);

echo count($food, true);


?>

*/

