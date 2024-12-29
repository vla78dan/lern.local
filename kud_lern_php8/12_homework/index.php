<?php error_reporting(-1);
$min = 60;
$hour = $min * 60;
$day = $hour * 24;
$week = $day * 7;
//echo "in hour " . $hour . " second";
//echo "in day " . $day . " second";
//echo "in week " . $week . " second";

//var_dump($hour, $day, $week);

$q = 60;
var_dump($q *= 60);
var_dump($q *= 24);
var_dump($q *= 7);