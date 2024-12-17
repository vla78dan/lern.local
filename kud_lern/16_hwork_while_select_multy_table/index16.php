<?php error_reporting(-1);
/*
 * Вывести выпадающий список select с годами 1978 до 2024 включительно.
 * Используя цикл while вывести таблицу умножения
 */
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<label for="cars">Choose a car:</label>
<select name="cars" id="cars">
    <option value="1" class="op">VAZ</option>
    <option value="1" class="op">ZAZ</option>
    <option value="1" class="op">KAMAZ</option>
</select>
<?php

$year = 1978;

echo "<select>";

while ($year <= 2024) {
    echo "<option value='{$year}'>{$year}</option>";
    $year++;
}

echo "<select>";

echo '<table border = "1" width = "100%"';

$tr = 1;
while ($tr < 10) {
    echo "<tr>";
    $td = 1;
    while ($td < 10) {
        echo "<td>$td * $tr =" . $td * $tr . "</td>";
        $td++;
    }
    echo "</tr>";
    $tr++;
}
echo '<table>';


?>


</body>
</html>
