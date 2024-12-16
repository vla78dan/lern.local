<?php error_reporting(-1);
/*
$var = null;
echo $var;
*/
$price = 10;
//var_dump($price) ;
$light = 'green1';

//if ($light == 'green') {
//    echo 'GO1!!!';
//} else {
//    echo 'STOP!!';
//}
//echo $light == 'red1' ? 'GO2!!' : 'STOPE!!';

//echo $price ?: 'unknown price';
$test = $price >= 10 ?: 'unknown price';
var_dump($test);




















