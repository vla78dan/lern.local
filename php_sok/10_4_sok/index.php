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

$names = ['Alex', 'Dodd', 'Tim',];
//$names['1'] = 'Dodd';
$names2 = ['Bobb', 'Dodd','Mod',];

$food = array(
    'fruits' => array('orange', 'banana', 'apple'),
    'veggie' => array('carrot', 'collard', 'pea')
);

echo '<pre>';

if(array_key_exists('veggie', $food)){
    echo "Key exist";
} else {
    "No key exist";
}
/*
 * array_key_exists
 * array_keys
 */
echo '</pre>';


?>




<h2>Hello2</h2>
</body>
</html>




<?php
/*
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

