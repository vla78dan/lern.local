<?php

if(!empty($_POST)){
    print_r($_POST);
    echo "<div>Данные:</div>";
    echo $_POST['fio'] . '<br>';
    echo $_POST['massage'] . '<br>';
    if (isset($_POST['subscribe'])) {
    }    echo $_POST['subscribe'] . '<br>';
};
print_r($_POST['number']) ;


if(!empty($_GET)){
    print_r($_GET);
}

