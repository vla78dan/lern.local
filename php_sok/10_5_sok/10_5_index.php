<?php error_reporting(E_ALL);
session_start();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>10_5</title>
</head>
<body>
<h1>Bobbbb</h1>

<!--<form action="">-->
<!--    <input type="text" name="FIO">-->
<!--    <input type="submit" value="Отправить форму">-->
<!---->
<!--</form>-->



<form method="post" action="action.php">
    <input type="text" name="fio">
    <textarea name="massage"></textarea>
    <input type="checkbox" name="subscribe" value="subscribed" />
    <select name ="number[]" multiple>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
    </select>
    <input type="submit" value="Отправить форму" />

</form>

<a href="10_5_index.php/?fio=JuJiK&massage=RyJiK&test=one">Add to card</a>

<?php
if(!empty($_GET)){
print_r($_GET);
}

var_dump($_SESSION['name']);

?>


<h2>Doddd</h2>

<?php


?>


























</body>
</html>
