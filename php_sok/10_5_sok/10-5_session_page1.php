<?php

session_start(); //Создаем сессию
//$_SESSION['name'] = 'Bobbbb';


if ($_SESSION['result'] !== 'success') die('Вам доступ закрыт');

echo 'Код нашей страницы';



































/*
 *
 *
 * session_start(); //Создаем сессию
//$_SESSION['name'] = 'Dodd';


var_dump($_SESSION['name']);


unset($_SESSION['name']);
// Очищает заданную сессию
session_unset();
// Очищает данные сессии

//session_destroy();
//— Уничтожает зарегистрированные данные сессии

 */









